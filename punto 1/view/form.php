<?php include "./controller/controller.php"?>

<?php ?>

<form method="post">
    <div>
        <label for="number1">Ingrese número 1</label>
        <input 
        id="number1"
        type="text"
        name="num1"
        placeholder="1"
        >
    </div>
    <div>
        <label for="number2">Ingrese número 2</label>
        <input 
        id="number2"
        type="text"
        name="num2"
        placeholder="2"
        >
    </div>
    <div>
        <label for="operation">Tipo de operación</label>
           <select name="operation" id="operation">
           <option value="suma">Suma</option>
           <option value="resta">Resta</option>
           <option value="multiplicacion">Multiplicacion</option>
           <option value="division">Division</option>
           </select>
        </div>
        <div>
            <button>Calcular</button>
        </div>

</form>