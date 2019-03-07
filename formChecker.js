function formCheck()
{

let keroQuant=document.getElementById('kero');
let tamaQuant=document.getElementById('tama');
let giroQuant=document.getElementById('giro');
let kuruQuant=document.getElementById('kuru');
let doroQuant=document.getElementById('doro');
let userName=document.getElementById('uname');
let pass=document.getElementById('pass');
let ship1=document.getElementById('ship1');
let ship2=document.getElementById('ship2');
let ship3=document.getElementById('ship3');

let keroVal=keroQuant.value;
let tamaVal=tamaQuant.value;
let giroVal=giroQuant.value;
let kuruVal=kuruQuant.value;
let doroVal=doroQuant.value;
let unameVal=userName.value;
let passVal=pass.value;

let shipSel1=ship1.checked;
let shipSel2=ship2.checked;
let shipSel3=ship3.checked;

let at = 0;

// The logic here gets messy but it works and I didn't see the need to spend any longer to make it look good.


// Check the username and password
if(unameVal.length > 4 && passVal.length > 0) // must be (char)@(char).com a minimum of 5 chars.
{
    if(unameVal[0] != '@')
    {
        for(let i in unameVal)
        {
            if(unameVal[i] == '@')
            {
                at++;
            }
            if(at > 1)
            {
                // Originally I had all these alerts numbers so I knew the logic was working as intended.
                alert ("Please Enter a Valid Username!");
                return false;
            }
        }
        if(!unameVal.endsWith(".com"))
           {
                alert("Please Enter a Valid Username!");
                return false;
           }
        else if(unameVal[unameVal.length-5] == '@')
        {
            alert("Please Enter a Valid Username!");
            return false;
        }

    }
    else
    {
        alert("Please Enter a Valid Username!");
        return false;
    }
}
else
{
    alert("Please Enter a Valid Username and Password!");
    return false;
}

// Check the shipping fields
if(shipSel1 == false && shipSel2 == false && shipSel3 == false)
{
    alert("Please Select Preferred Shipping Method.");
    return false;
}

// Check the quantities
if(keroVal >=0 && keroVal != "" && tamaVal >=0 && tamaVal != "" && giroVal >=0 && giroVal != "" && 
   kuruVal >=0 && kuruVal != "" && doroVal >=0 && doroVal !="")
{

    return true;

}

else
{
    alert("Please Enter a Valid Quantity! 0-9.");
    return false;
}

}