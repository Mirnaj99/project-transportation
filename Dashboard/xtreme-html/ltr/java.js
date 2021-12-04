var inp = [];
var chose_row;
var inc1 = 0;
let del = 0;


function input_admin() {
    for (let i = 1; i < 13; i++) {
        inp[i] = document.getElementById("add" + i).value;
        document.getElementById('add' + i).value = '';
        // console.log(inp[i]);
    }
    
}

function insertRow() {
    input_admin();
    var table1 = document.getElementById("table1");
    var i = 1;
    inc1++;
    // var row1 = table1.insertRow(i);
    let row1 = document.createElement("tr");
    row1.setAttribute("id", inc1);
    // var cell1 = row1.insertCell(0);
    var cell1 = document.createElement("td")
    table1.appendChild(row1);
    row1.appendChild(cell1);
    cell1.innerHTML = inc1;
    // console.log(inc1);
    for (i = 1; i < 13; i++) {
        // var cell1 = row1.insertCell(i);
        // cell1.innerHTML = inp[i];
        let text1 = document.createTextNode(inp[i]);
        // console.log(text1);
        let const1 = 
        ` <td onclick="edit()" id="a${inc1}${i}">${text1.textContent}</td>
        `;
        row1.innerHTML += const1;
        // console.log(td.nodeValue);
            // console.log(typeof const1);
    }
   
    del++;
    let const2 = `
    <td> 
        <button class='del' id="del(${del})" onclick ="deleteRow()">DEL</i>
        <button class='edit' id="edit_button${del}" onclick ="edit_row()">EDIT</i>
        <button class='save' id="save_button${del}" onclick ="save_row()">SAVE</i>
    </td> ` ;           
        row1.innerHTML += const2;
        document.getElementById("save_button"+del).style.display="none";
}

var i =1;
function edit_row()
{
 document.getElementById("edit_button"+i).style.display="none";
 document.getElementById("save_button"+i).style.display="block";
	for (let j =1;j<13;j++){
 var name=document.getElementById("a"+i+j);	
 var name_data=name.innerHTML;
 name.innerHTML="<input type='text' class='clsEidt' id='name_text"+j+"' value='"+name_data+"'>";}
}

function save_row()
{
for (let j =1;j<13;j++){
 var name_val=document.getElementById("name_text"+j).value;
 document.getElementById("a"+i+j).innerHTML=name_val;}
 document.getElementById("edit_button"+i).style.display="block";
 document.getElementById("save_button"+i).style.display="none";
 i++;
 console.log(i)
}

function deleteRow() {                          // function to delete row                          
    var td = event.target.parentNode;             // find td of the cell
    var tr = td.parentNode;                       // find tr of the td
    tr.parentNode.removeChild(tr);                // remove row of the chosen tr
}


function clearFieldsMarks() {                                       // function to clear the fields inside text boxes
    for (i = 1; i < 13; i++) {
        document.getElementById('add' + i).value = '';
    }
    const container = document.querySelector('.table1');    // clear input boxes for the grades with empty strings
    while (container.lastChild) {                              // take last child element of the parent container
        container.removeChild(container.lastChild);
    }
}
