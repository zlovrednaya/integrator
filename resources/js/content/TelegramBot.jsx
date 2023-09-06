import React, {Component} from "react";


async function sendRequest(){
    const response = await axios.post("http://127.0.0.1:8000/telegramBot/testConnection",{
        data:{
            service:'telegramBot'
        }
    })
    .then((response)=>{
        console.log(response);
    });
}
export default function Home(){
    return (
    <div>
       
        <div class="form-submit">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Token</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="token" />
                <button type="button" class="btn btn-light" onClick={sendRequest}>Send message</button>
            </div>

        </div>
    </div>);
}