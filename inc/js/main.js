var deleteButtons = document.querySelectorAll(".bouton_delet");

deleteButtons.forEach(function (button) {
  button.addEventListener("click", function (event) {
      event.preventDefault(); // Empêche le comportement par défaut du lien

      var confirmation = confirm("Êtes-vous sûr de vouloir supprimer cette ligne ?");

      if (confirmation) {
          // Redirigez l'utilisateur vers le lien spécifié
          window.location.href = button.getAttribute("href");
      }
  });
});