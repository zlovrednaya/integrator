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
                <input type="token" class="form-control" id="token" placeholder="token" />
                <label for="exampleFormControlInput1" class="form-label">Message</label>
                <input type="message" class="form-control" id="message" placeholder="message" />
                
                <button type="button" class="btn btn-light" onClick={sendRequest}>Send message</button>
            </div>
            <div>Chat</div>
            <div>here are messages with bot</div>

        </div>
    </div>);
}