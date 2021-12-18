function ValidateEmail(inputText)
{
    var mailformat = /^\w+([.-]?\w+)@\w+([.-]?\w+)(.\w{2,3})+$/;
    var xd = document.getElementById('namexd').innerHTML;
    if(inputText.value.match(mailformat))
    {
        alert("Feliratkoztál a hírlevelünkre!")
        document.form1.email.focus();
        return true;
    }
    else
    {
        alert("Érvényes e-mail címet adj meg!");
        document.form1.email.focus();
        return false;
    }
}