<?php include "./controller/calculationController.php"?>
<form method="post">
    <h2>Calculadora fechas</h2>
    <div>
    </div> 
        <label>Ingrese su nombre</label>
        <input 
        id="name"
        type="text"
        name="name"
        placeholder="John Doe"
        >
    
        <div>
        <p>Ingrese su fecha de nacimiento</p>
           <label for="age">Edad</label>
           <input 
           id="age"
           type="date"
           name="age"
           placeholder="18"           
           >
        </div>
        <div>
        <button>Calcular</button></div>
    
</form>