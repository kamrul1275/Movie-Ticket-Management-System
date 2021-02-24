/**
 * Created by dni_tahniat on 1/31/2019.
 */
const app = new Vue({
    el: '#tokenized-0000',
    data: {
        internalBaseURL: "/getBaseUrl",
        validateHashURL: "/validateHashTokenized",
        validateWalletURL: "/validateWalletTokenized",
        resendOtpURL: "/resendOtpTokenized",
        validateOtpURL: "/validateOTPTokenized",
        errorPageURL: "/tokenized-error",
        formWindow: 1, //1:wallet,2:otp,3:pin
        walletRegex: /^01\d{9}$/,
        otpRegex: /^\d{6}$/,
        pinRegex: /^\d{4,5}$/,
        successfulCode: "0000",
        wrongOtpCode: "2016",
        wrongOtpCountExceededCode: "2017",
        otpVerificationTimeExceededCode: "2018",
        wrongPinCode: "2014",
        resendOTPCountExceedCode: "2013",
        wrongPinCountExceededCode: "2015",
        pinVerificationTimeExceededCode: "2019",
        notAbKashWalletCode : "2058",
        multipleWindowCode : "2059",
        walletTbDisabled: false,
        otpTbDisabled: true,
        pinTbDisabled: true,
        confirmButtonDisabled: true,
        closeButtonDisabled: false,
        resentOtpLinkEnabled: true,
        walletValidationTryCount: 0,
        showWallet: true,
        showOTP: false,
        showResendOTP: true,
        showPIN: false,
        message: "Validating Request. Please wait ..",
        invalidWalletRegexMessage: "Put a valid bKash Account Number",
        invalidOtpRegexMessage: "Put a valid verification code",
        invalidPinRegexMessage: "Invalid PIN",
        genericErrorMessage: "Invalid Request",
        internalErrorMessage: "Internal Error",
        codeSuccessfulSentMessage: "Code sent successfully",
        sendingCodeMessage: "Sending code to user handset ..",
        successfulValidationMessage: "User validation successful. ",
        merchantImageSrc: "",
        organizationName: "n/a",
        successURL: "",
        failureURL: "",
        cancelURL: "",
        baseURL: "",
        isProcessing: false,
        footer: "<b>Helpline</b>: 16247. <b>Version</b>: 1.2.0-beta",
        tocText: "By clicking 'Proceed', you agree to the <a href='https://www.bkash.com/tokenized_checkout' target='_blank' > terms and conditions",
        confirmButtonText: "Loading ..",
        processingMessage: 'Processing Request. Please wait ..',
        confirmText: "Confirm",
        proceedText: "Proceed",
        processingText: 'Processing',
        finishText: "Finish",
        hash: "",
        paymentID: "",
        apiVersion: "v1.2.0-beta",
        tokenizationType: "Agreement",
        encKey: "",
        rsaKey: "",
        nonce: "",
        wallet: "",
        otp: "",
        pin: "",
        url: ""
    },
    methods: {
        initTimerRedirectToMerchant: function (status) {
            let count = 5;
            let self = this;
            return function inner() {
                if (count > -1) {
                    if (status === 'cancel') {
                        self.message = "Agreement Creation Cancelled. Redirecting to <a href='" + self.cancelURL + "&apiVersion=1.2.0-beta'>Merchant page</a> in " + count + " seconds.";
                    }
                    else if (status === 'failure') {
                        self.message = "Agreement Creation Failed. Redirecting to <a href='" + self.failureURL + "&apiVersion=1.2.0-beta'>Merchant page</a> in " + count + " seconds.";
                    }
                    else if (status === 'success') {
                        self.message = "bKash Account Verification Successful. Redirecting to <a href='" + self.successURL + "&apiVersion=1.2.0-beta'>Merchant page</a> in " + count + " seconds.";
                    }
                    count--;
                    setTimeout(inner, 1000);
                }
                else {
                    if (status === 'cancel') {
                        window.location.href = self.cancelURL+"&apiVersion=1.2.0-beta";
                    }
                    else if (status === 'failure') {
                        window.location.href = self.failureURL+"&apiVersion=1.2.0-beta";
                    }
                    else if (status === 'success') {
                        window.location.href = self.successURL+"&apiVersion=1.2.0-beta";
                    }
                }
            };
        },
        onClose: function () {
            if (!this.closeButtonDisabled) {
                this.confirmButtonDisabled = true;
                this.closeButtonDisabled = true;
                this.initTimerRedirectToMerchant('cancel')();
            }
        },
        onConfirm: function () {
            if (!this.confirmButtonDisabled) {
                if (this.formWindow == 1) {
                    this.onWalletSubmit();
                }
                else if (this.formWindow == 2) {
                    this.onOtpSubmit();
                }
            }
        },
        onWalletSubmit: function () {
            this.message = "";
            if (this.walletRegex.test(this.wallet)) {
                this.confirmButtonDisabled = true;
                this.closeButtonDisabled = true;
                this.confirmButtonText = this.processingText;
                this.isProcessing = true;
                if(this.walletValidationTryCount == 0){
                    this.validateWallet()
                    .then(response => {
                        if (response && response.data.statusCode === this.successfulCode) {
                            this.walletTbDisabled = true;
                            this.showOTP = true;
                            this.otpTbDisabled = false;
                            this.formWindow = 2;
                            this.message = "";
                            this.tocText = "";
                            this.showWallet = false;
                            this.confirmButtonText=this.finishText;
                        } else {
                            //mutiple window error handling
                            if (response && response.data.statusCode == this.multipleWindowCode){
                                this.message = response.data.statusMessage;
                                window.location.href = 'tokenized-error';
                            }
                            else {
                                if (response && response.data.statusMessage) {
                                    this.wallet="";
                                    this.message = response.data.statusMessage;
                                } else {

                                    this.message = this.genericErrorMessage;
                                }
                                this.confirmButtonText=this.proceedText;
                            }
                        }
                    })
                    .catch(error => {
                        //console.error(error);
                        this.message = this.internalErrorMessage;
                        this.confirmButtonText=this.proceedText;
                    })
                    .then(() => {
                        this.walletValidationTryCount++;
                        //this.confirmButtonText = this.proceedText;
                        this.isProcessing = false;
                        this.closeButtonDisabled = false;
                        this.confirmButtonDisabled = false;
                    })
                }
                else
                {
                    //after try 1
                    this.resendOTP()
                    .then(response => {
                        if (response && response.data.statusCode === this.successfulCode) {
                            //wallet submit successful
                            this.walletTbDisabled = true;
                            this.showOTP = true;
                            this.otpTbDisabled = false;
                            this.formWindow = 2;
                            this.confirmButtonDisabled = false;
                            this.message = "";
                            this.tocText = "";
                            this.showWallet = false;
                            this.walletValidationTryCount++;
                            this.confirmButtonText = this.proceedText;
                            this.isProcessing = false;
                            this.confirmButtonDisabled = false;
                            this.closeButtonDisabled = false;
                        } else {
                            if (response && response.data.statusCode==this.resendOTPCountExceedCode) {
                                this.walletValidationTryCount++;
                                this.confirmButtonText = this.proceedText;
                                this.isProcessing = false;
                                this.initTimerRedirectToMerchant('failure')();
                            } else{
                                this.walletValidationTryCount++;
                                this.confirmButtonText = this.proceedText;
                                this.isProcessing = false;
                                this.confirmButtonDisabled = false;
                                this.closeButtonDisabled = false;
                                this.message = response.data.statusMessage;
                                this.wallet="";
                            }
                        }
                    })
                    .catch( error => {
                        this.walletValidationTryCount++;
                        this.confirmButtonText = this.proceedText;
                        this.isProcessing = false;
                        this.initTimerRedirectToMerchant('failure')();
                    });
                }
            } else {
                this.message = this.invalidWalletRegexMessage;
            }
        },
        onOtpSubmit: function () {
            this.message = "";
            if (this.otpRegex.test(this.otp)) {
                this.confirmButtonDisabled = true;
                this.closeButtonDisabled = true;
                this.confirmButtonText = this.processingText;
                this.isProcessing = true;
                this.validateOTP()
                    .then(response => {
                        if (response && response.data.statusCode === this.successfulCode) {
                            //otp successful
                            this.encKey = response.data.aesKey;
                            this.rsaKey = response.data.rsaPublicKey;
                            this.nonce = response.data.pinNonce;
                            this.otpTbDisabled = true;
                            this.showPIN = false;
                            this.pinTbDisabled = false;
                            this.showResendOTP = false;
                            this.message = "";
                            this.showOTP = true;
                            this.initTimerRedirectToMerchant('success')();
                        }
                        else if (response && response.data.statusMessage && response.data.statusCode === this.wrongOtpCode) {
                            this.message = response.data.statusMessage;
                            this.confirmButtonDisabled = false;
                            this.closeButtonDisabled = false;
                            this.isProcessing = false;
                        }
                        else if (response && response.data.statusMessage && response.data.statusCode === this.wrongOtpCountExceededCode) {
                            this.message = response.data.statusMessage;
                            this.showResendOTP = false;
                            this.initTimerRedirectToMerchant('failure')();
                        }
                        else if (response && response.data.statusMessage && response.data.statusCode === this.otpVerificationTimeExceededCode) {
                            this.message = response.data.statusMessage;
                            this.confirmButtonDisabled = false;
                            this.closeButtonDisabled = false;
                            this.isProcessing = false;

                            if (!this.showResendOTP) {
                                this.closeButtonDisabled = true;
                                this.isProcessing = true;
                                this.confirmButtonDisabled = true;
                                this.initTimerRedirectToMerchant('failure')();
                            }
                        }
                        else {
                            if (response && response.data.statusMessage) {
                                this.message = response.data.statusMessage;
                            } else {
                                this.message = this.genericErrorMessage;
                            }
                            this.initTimerRedirectToMerchant('failure')();
                        }
                    })
                    .catch(error => {
                        //console.error(error);
                        this.closeButtonDisabled = false;
                        this.isProcessing = false;
                        this.confirmButtonDisabled = false;
                        this.message = this.internalErrorMessage;
                    })
                    .then(() => {
                        this.confirmButtonText = this.finishText;
                    })
            } else {
                this.message = this.invalidOtpRegexMessage;
            }
        },
        onResendOtpSubmit: function () {
            this.message = this.sendingCodeMessage;
            this.confirmButtonDisabled = true;
            this.closeButtonDisabled = true;
            this.otp="";
            this.resendOTP()
                .then(response => {
                    if (response && response.data.statusCode === this.successfulCode) {
                        //wallet submit successful
                        this.message = this.codeSuccessfulSentMessage;
                    } else {
                        this.showResendOTP = false;
                        if (response && response.data.statusMessage) {
                            this.message = response.data.statusMessage;
                        } else {
                            this.message = this.genericErrorMessage;
                        }
                    }
                })
                .catch(error => {
                    this.message = this.internalErrorMessage;
                })
                .then(() => {
                    this.confirmButtonDisabled = false;
                    this.closeButtonDisabled = false;
                })
        },
        getInternalBaseURL: function () {
            return axios.post(this.internalBaseURL);
        },
        validateURL: function () {
            let targetURL = this.baseURL + this.validateHashURL;
            return axios.post(targetURL, {
                hash: this.hash,
                paymentID: this.paymentID,
                apiVersion: this.apiVersion
            });

        },
        validateWallet: function () {
            let targetURL = this.baseURL + this.validateWalletURL;
            return axios.post(targetURL, {
                wallet: this.wallet,
                paymentID: this.paymentID,
                apiVersion: this.apiVersion
            });
        },
        validateOTP: function () {
            let targetURL = this.baseURL + this.validateOtpURL;
            return axios.post(targetURL, {
                otp: this.otp,
                wallet: this.wallet,
                paymentID: this.paymentID,
                apiVersion: this.apiVersion
            });
        },
        resendOTP: function () {
            let targetURL = this.baseURL + this.resendOtpURL;
            return axios.post(targetURL, {
                wallet: this.wallet,
                paymentID: this.paymentID,
                apiVersion: this.apiVersion
            });
        }
    },
    computed: {

    },
    mounted() {
        this.url = window.location.href;
        let currentUrl = new URL(this.url);
        this.paymentID = currentUrl.searchParams.get('paymentID');
        this.hash = currentUrl.searchParams.get('hash');
        this.confirmButtonDisabled = true;
        this.closeButtonDisabled = true;
        this.getInternalBaseURL()
            .then((response) => {
                this.baseURL = response.data.baseUrl;
                return this.validateURL();
            })
            .then((response) => {
                if (response && response.data.statusCode === this.successfulCode) {
                    this.merchantImageSrc = response.data.orgLogo;
                    this.organizationName = response.data.orgName;
                    this.confirmButtonText = this.proceedText;
                    this.confirmButtonDisabled = false;
                    this.successURL = response.data.successCallbackURL;
                    this.failureURL = response.data.failureCallbackURL;
                    this.cancelURL = response.data.cancelCallbackURL;
                    this.confirmButtonDisabled = false;
                    this.message = "";
                    //pre-populating wallet
                    if (response.data.wallet && this.walletRegex.test(response.data.wallet)){
                        this.wallet=response.data.wallet;
                    }
                }
                else {
                    this.message = this.genericErrorMessage;
                    window.location.href = 'tokenized-error';
                }
            })
            .catch(error => {
                this.message = this.internalErrorMessage;
            })
            .then(() => {
                this.closeButtonDisabled = false;
                this.confirmButtonText = this.proceedText;
            })
    }
})