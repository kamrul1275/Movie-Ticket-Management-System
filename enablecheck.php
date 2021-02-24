<script type="text/javascript">
  function EnableDisableTextbox(chkPan){
    var txtPanNumber = document.getElementById("txtPanNumber");
    txtPanNumber.disabled = chkPan.checked ? false : true;
    if (!txtPanNumber.disabled) {
      txtPanNumber.focus();
    }
  }
  function EnableDisableTextbox1(chkPan1){
    var txtPanNumber1 = document.getElementById("txtPanNumber1");
    txtPanNumber1.disabled = chkPan1.checked ? false : true;
    if (!txtPanNumber1.disabled) {
      txtPanNumber1.focus();
    }
  }
  function EnableDisableTextbox2(chkPan2){
    var txtPanNumber2 = document.getElementById("txtPanNumber2");
    txtPanNumber2.disabled = chkPan2.checked ? false : true;
    if (!txtPanNumber2.disabled) {
      txtPanNumber2.focus();
    }
  }

</script>
