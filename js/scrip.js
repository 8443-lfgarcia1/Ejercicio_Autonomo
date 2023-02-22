/*const enableForm = document.getElementById("cuadrado");
      const disableForm = document.getElementById("triangulo");
      const fieldset = document.getElementById("fieldset");

      enableForm.addEventListener("click", (l1) => (fieldset.disabled = false));
      disableForm.addEventListener("click", (l2) => (fieldset.disabled = true));*/


/*
  // Obtener el elemento select
  const select = document.querySelector('select[name="tipo"]');

  // Obtener los elementos input correspondientes a los lados
  const lado1 = document.querySelector('input[name="lado1"]');
  const lado2 = document.querySelector('input[name="lado2"]');
  const lado3 = document.querySelector('input[name="lado3"]');

  // Agregar un evento al cambiar la opción seleccionada
  select.addEventListener('change', () => {
    // Obtener el valor de la opción seleccionada
    const opcionSeleccionada = select.value;

    // Habilitar la edición de las cajas de texto correspondientes
    switch (opcionSeleccionada) {
      case 'cuadrado':
        lado1.disabled = false;
        lado2.disabled = true;
        lado3.disabled = true;
        break;
      case 'rectangulo':
        lado1.disabled = false;
        lado2.disabled = false;
        lado3.disabled = true;
        break;
      case 'triangulo':
        lado1.disabled = false;
        lado2.disabled = false;
        lado3.disabled = false;
        break;
      default:
        lado1.disabled = true;
        lado2.disabled = true;
        lado3.disabled = true;
        break;
    }
  }); */

  function habilitarCampos() {
    var figura = document.getElementById("sleccionar").value;
    var lado1 = document.getElementById("l1");
    var lado2 = document.getElementById("l2");
    var lado3 = document.getElementById("l3");

    if (figura == "cuadrado") {
        lado1.disabled = false;
        lado2.disabled = true;
        lado3.disabled = true;
    } else if (figura == "rectangulo") {
        lado1.disabled = false;
        lado2.disabled = false;
        lado3.disabled = true;
    } else if (figura == "triangulo") {
        lado1.disabled = false;
        lado2.disabled = false;
        lado3.disabled = false;
    } else {
        lado1.disabled = true;
        lado2.disabled = true;
        lado3.disabled = true;
    }
}
