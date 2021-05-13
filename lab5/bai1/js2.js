function calculate(){
    op1 = document.getElementById("input1").value;
    op2 = document.getElementById("input2").value;
    op = document.getElementById("op").value;
    console.log(op);
    switch (op){
        case "+":
            $("#result").val(parseInt(op1) + parseInt(op2));
            console.log(parseInt(op1) + parseInt(op2));
            break;
        case "-":
            $("#result").val(parseInt(op1) - parseInt(op2));
            console.log(parseInt(op1) + parseInt(op2));
            break;
        case "*":
            $("#result").val(parseInt(op1) * parseInt(op2));
            console.log(parseInt(op1) + parseInt(op2));
            break;
        case "/":
            $("#result").val(parseInt(op1) / parseInt(op2));
            console.log(parseInt(op1) + parseInt(op2));
            break;
        case "^":
            $("#result").val(parseInt(op1) ** parseInt(op2));
            console.log(parseInt(op1) + parseInt(op2));
            break;
    }
}

