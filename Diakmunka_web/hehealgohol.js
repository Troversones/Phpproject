var nig = new Date().toLocaleTimeString();
var igen = new Date(0,0,0,10,0,0).toLocaleTimeString();
var nem = new Date(0,0,0,18,0,0).toLocaleTimeString();
if (nig >= igen && nig <= nem) {
    document.getElementById('gangstashit').innerText = "NYITVA";
    document.getElementById('gangstashit').style.color = "green";
}
else
{
    document.getElementById('gangstashit').innerText = "NYITÁS 10 ÓRAKOR";
    document.getElementById('gangstashit').style.color = "red";
}