let openModal = document.getElementById('open_comment_form');

openModal.addEventListener('click', function onOpen() {
    if (typeof favDialog.showModal === "function") {
      favDialog.showModal();
    } else {
      console.log("L'API <dialog> n'est pas prise en charge par ce navigateur.");
    }
  });

favDialog.addEventListener('close', function onClose() {
    outputBox.value = favDialog.returnValue + " bouton cliqué - " + (new Date()).toString();
  });