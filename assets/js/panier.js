var compteur_Mac_32 = 0;
var compteur_Mac_64= 0;
var compteur_Windows_32 = 0;
var compteur_Windows_64 = 0;
var compteur_Ubuntu_32 = 0;
var compteur_Ubuntu_64 = 0;

function Mac_32 (){
    compteur_Mac_32++;
    document.getElementById('compteur_article').innerHTML=compteur_Mac_32;
    var menu_panier = document.getElementById('panier');
    var li = document.createElement('li');
    var a = document.createElement('a');
    menu_panier.appendChild(li);
    li.innerHTML = 'Mac_32_bit' + '       ' + compteur_Mac_32;
  };

function Mac_64 (){
    compteur_Mac_64++;
    document.getElementById('compteur_article').innerHTML=compteur_Mac_64;
    var menu_panier = document.getElementById('panier');
    var li = document.createElement('li');
    var a = document.createElement('a');
    menu_panier.appendChild(li);
    li.innerHTML = 'Mac_64_bit' + '       ' + compteur_Mac_64;
  };



function Windows_32 (){
      compteur_Windows_32++;
      document.getElementById('compteur_article').innerHTML=compteur_Windows_32;
      var menu_panier = document.getElementById('panier');
      var li = document.createElement('li');
      var a = document.createElement('a');
      menu_panier.appendChild(li);
      li.innerHTML = 'Windows_32_bit' + '       ' + compteur_Windows_32;
};
function Windows_64 (){
      compteur_Windows_64++;
      document.getElementById('compteur_article').innerHTML=compteur_Windows_64;
      var menu_panier = document.getElementById('panier');
      var li = document.createElement('li');
      var a = document.createElement('a');
      menu_panier.appendChild(li);
      li.innerHTML = 'Windows_64_bit' + '       ' + compteur_Windows_64;
};
function Ubuntu_32 (){
      compteur_Ubuntu_32++;
      document.getElementById('compteur_article').innerHTML=compteur_Ubuntu_32;
      var menu_panier = document.getElementById('panier');
      var li = document.createElement('li');
      var a = document.createElement('a');
      menu_panier.appendChild(li);
      li.innerHTML = 'Ubuntu_32_bit' + '       ' + compteur_Ubuntu_32;
};
function Ubuntu_64 (){

      compteur_Ubuntu_64++;
      document.getElementById('compteur_article').innerHTML=compteur_Ubuntu_64;
      var menu_panier = document.getElementById('panier');
      var li = document.createElement('li');
      var a = document.createElement('a');
      menu_panier.appendChild(li);
      li.innerHTML = 'Ubuntu_64_bit' + '       ' + compteur_Ubuntu_64;
};
sessionStorage.setItem("compteur_Mac_32","compteur_Mac_64","compteur_Ubuntu_64","compteur_Ubuntu_32","compteur_Windows_32","compteur_Windows_64");
