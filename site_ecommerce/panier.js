function(){
    var Mac_32 = document.getElementById('32_bit_Mac');
    var Mac_64 = document.getElementById('64_bit_Mac');
    var Windows_32 = document.getElementById('32_bit_Windows');
    var Windows_64 = document.getElementById('64_bit_Windows');
    var Ubuntu_32 = document.getElementById('32_bit_Ubuntu');
    var Ubuntu_64 = document.getElementById('64_bit_Ubuntu');
    var compteur_Mac_32 = 0;
    var compteur_Mac_64= 0;
    var compteur_Windows_32 = 0;
    var compteur_Windows_64 = 0;
    var compteur_Ubuntu_32 = 0;
    var compteur_Ubuntu_64 = 0;


    // Premier événement click
    Mac_32.addEventListener('click', function() {
      compteur_Mac_32++;
      document.getElementById('compteur_article').innerHTML=compteur_Mac_32;
      var menu_panier = document.getElementById('panier');
      var li = document.createElement('li');
      var a = document.createElement('a');
      menu_panier.appendChild(li);
      li.innerHTML = 'Mac_32_bit' + '       ' + compteur_Mac_32;
    });
    // Premier événement click
    Mac_64.addEventListener('click', function() {
      compteur_Mac_64++;
      document.getElementById('compteur_article').innerHTML=compteur_Mac_64;
      var menu_panier = document.getElementById('panier');
      var li = document.createElement('li');
      var a = document.createElement('a');
      menu_panier.appendChild(li);
      li.innerHTML = 'Mac_64_bit' + '       ' + compteur_Mac_64;
    });
    // Premier événement click
    Windows_32.addEventListener('click', function() {
      compteur_Windows_32++;
      document.getElementById('compteur_article').innerHTML=compteur_Windows_32;
      var menu_panier = document.getElementById('panier');
      var li = document.createElement('li');
      var a = document.createElement('a');
      menu_panier.appendChild(li);
      li.innerHTML = 'Windows_32_bit' + '       ' + compteur_Windows_32;
    });
    // Premier événement click
    Windows_64.addEventListener('click', function() {
      compteur_Windows_64++;
      document.getElementById('compteur_article').innerHTML=compteur_Windows_64;
      var menu_panier = document.getElementById('panier');
      var li = document.createElement('li');
      var a = document.createElement('a');
      menu_panier.appendChild(li);
      li.innerHTML = 'Windows_64_bit' + '       ' + compteur_Windows_64;
    });
    // Premier événement click
    Ubuntu_32.addEventListener('click', function() {
      compteur_Ubuntu_32++;
      document.getElementById('compteur_article').innerHTML=compteur_Ubuntu_32;
      var menu_panier = document.getElementById('panier');
      var li = document.createElement('li');
      var a = document.createElement('a');
      menu_panier.appendChild(li);
      li.innerHTML = 'Ubuntu_32_bit' + '       ' + compteur_Ubuntu_32;
    });
    // Premier événement click
    Ubuntu_64.addEventListener('click', function() {
      compteur_Ubuntu_64++;
      document.getElementById('compteur_article').innerHTML=compteur_Ubuntu_64;
      var menu_panier = document.getElementById('panier');
      var li = document.createElement('li');
      var a = document.createElement('a');
      menu_panier.appendChild(li);
      li.innerHTML = 'Ubuntu_64_bit' + '       ' + compteur_Ubuntu_64;
      /* récuperation ID panier pour ajouter ligne
      ajout d'un enfant
      '<li><a>Nom de l'article<a></li>'
*/
    });
}
