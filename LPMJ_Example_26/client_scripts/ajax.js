/**
 * Created by Alexei on 28/09/2014.
 */
function checkUser(user)
{
    if (user.value == '')
    {
        O('info').innerHTML = '';
        return
    }

    params = "user=" + user.value;
    request = new ajaxRequest();
    request.open("POST", "checkuser.php", true);
    request.setRequestHeader("Content-type",
        "application/x-www-form-urlencoded");
    request.setRequestHeader("Content-length", params.length);
    request.setReguestHeader("Connection", "close");

    request.onreadystatechange = function()
    {
        if (this.readyState == 4)
            if (this.status == 200) //request OK
                if (this.responseText != null) //response not empty
                    O ('info').innerHTML = this.responseText
    };
    request.send(params)
}

function ajaxRequest()
{
    try
    {
        var request = new XMLHttpRequest()
    }
    catch (e1) {
        try {
            request = new ActiveXObject("Msxml2.XMLHTTP")
        }
        catch (e2)
        {
            try
            {
                request = new ActiveXObject("Microsoft.XMLHTTP")
            }
            catch (e3)
            {
                request = false;
            }
        }
    }
    return request;
}
