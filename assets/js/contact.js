//
//
async function holla() {
    //
    //Get user's name.
    const user_name = document.getElementById('name').value;
    //
    //Get user's email.
    const user_email = document.getElementById('email').value;
    //
    //Get the message.
    const message = document.getElementById('message').value;
    //alert(`${message},${user_email},${user_name}`);
    //
    //
    const send_message = await fetch('http://127.0.0.1:1100/classes/Get_data_1.php');
    const data = await reponse.json();
    console.log(data);
}