var account={
account_title:"shahzad miraj",
    balance:12000,
    currency:"PKRS",
    iban:"l1f16bscs0241"
}
var A_B=document.getElementById("balance");
shows();
function shows() {
    var A_T=document.getElementById("title");
    A_T.innerText=account.account_title;
    A_B.innerText=account.balance;
    var A_C=document.getElementById("currency");
    A_C.innerText=account.currency;
    var I_B=document.getElementById("IBAN");
    I_B.innerText=account.iban;
}


function Deposit(event) {

if(event.keyCode==13)
{
    var user_data=document.getElementById("deposit").value;
    if(!isNaN(user_data))
    {
        account.balance=account.balance+parseInt(user_data);
        shows();
    }
}
}
function Withdraw(event) {
    var k=event.keyCode;
    if(k==13)
    {
        var user_data=document.getElementById("withdraw").value;
        if(!isNaN(user_data))
        {
            var num=parseInt(user_data);
            if(num<account.balance)
            {
                var x=new Date();
                account.balance=account.balance-num;
                shows();
                var history=document.getElementById("transaction-table");
                history.innerHTML+='<tr><th align="left" valign="middle" scope="col">'+x+'<th
            }
        }
    }

}