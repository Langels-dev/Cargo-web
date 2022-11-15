// Referencia del formulario
let $enviarEmail = document.querySelector("#form-mail");

$enviarEmail.addEventListener("submit", (e) => {
  // Prevenimos el recargo de la pagina
  e.preventDefault();

  let $name = document.querySelector("#name").value;
  let $srname = document.querySelector("#srname").value;
  let $correo = document.querySelector("#email").value;
  let $msg = document.querySelector("#msg").value;

  if ($name === "" || $srname === "" || $correo === "" || $msg === "") {
    swal("Error", "Enter all data or check your mail", "error");
  } else {
    // Capturamos los datos del formulario
    let formData = new FormData($enviarEmail);

    const url = "./SendMail/index.php";

    fetch(url, {
      method: "POST",
      body: formData,
    }).then((response) => {
      if (response.status === 200 && response.ok) {
        swal("Pefect", "mail sent successfully", "succes");
        $name = "";
        $srname = "";
        $correo = "";
        $msg = "";
      } else {
        swal("We're sorry", "We couldn't send your email", "warning");
      }
    });
  }
});
