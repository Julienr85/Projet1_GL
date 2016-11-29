function getRadioVal(form, name) {
    var val;
    // get list of radio buttons with specified name
    var radios = form.elements[name];

    // loop through list of radio buttons
    for (var i=0, len=radios.length; i<len; i++) {
        if ( radios[i].checked ) { // radio checked?
            val = radios[i].value; // if so, hold its value in val
            break; // and break out of for loop
        }
    }
    return val; // return value of checked radio or undefined if none checked
}

function getTextVal(form, name) {
    // get list of radio buttons with specified name
    var val = form.elements[name];
    alert(val.value);
    return val.value; // return value of checked radio or undefined if none checked
}



document.getElementById('form_panier').onsubmit = function() {
    // this (keyword) refers to form to which onsubmit attached
    // 'ship' is name of radio button group
    var optradio1 = getRadioVal(this, 'optradio1');
    var optradio = getRadioVal(this, 'optradio');

    var machine = getTextVal(this, 'machine');
    var machine1 = getTextVal(this, 'machine1.puphet');


    var adresseIp = getTextVal(this, 'adresseIp');
    var memory = getTextVal(this, 'memory');
    var cpu = getTextVal(this, 'cpu');
    var host_Port = getTextVal(this, 'host_Port');
    var Vm_Port = getTextVal(this, 'Vm_Port');
    var Host_port_supp = getTextVal(this, 'Host_port_supp');
    var Vm_port_supp = getTextVal(this, 'Vm_port_supp');


    // display value obtained
    alert(val);
    // more code here ...
}
