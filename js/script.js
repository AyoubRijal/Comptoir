


function verifier() {

var retounr_null = checkifnull();
var retourn_type = checktype();

if (retounr_null == false || retourn_type==false) {

return false;
}else return true;

}


function checkifnull () {
    var cnt=0;
    var _input_node = document.getElementsByClassName('_input');
    var nbr_ligne =  _input_node.length;
      for (var i=0;i<nbr_ligne;i++) {
          if ( _input_node[i].value == "")
          {
                _input_node[i].style.backgroundColor = "red";
                cnt++;
                alert('vide');
          }
      }
      if (cnt > 0) {
          return false;

        }else return true;

    }
