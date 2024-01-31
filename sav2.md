@import url("https://fonts.googleapis.com/css?family=Proxima Nova:400,800");

* {
  box-sizing: border-box;
  width: 100%;
  overflow: hidden;
}

img .bot{
    max-width: 30%;
}

img .standard{
    max-width: 40%;
}


@media screen and (min-width: 769px) {


    body {
        background: #f6f5f7;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        font-family: "Montserrat", sans-serif;
        height: 100vh;
        margin: -20px 0 50px;
      }

      
      h1 {
        font-weight: bold;
        margin: 0;
      }

      h1 .titre{
        font-size: larger;
      }
      
      h2 {
        text-align: center;
      }
      
      p {
        font-size: 16px;
        font-weight: 100;
        line-height: 20px;
        letter-spacing: 0.5px;
        margin: 20px 0 30px;
      }
      
      span {
        font-size: 12px;
      }
      
      a {
        color: #333;
        font-size: 14px;
        text-decoration: none;
        margin: 15px 0;
      }
      
      button {
        border-radius: 20px;
        border: 1px solid #a136f6;
        background-color: #a136f6;
        color: #ffffff;
        font-size: 12px;
        font-weight: bold;
        padding: 12px 45px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 80ms ease-in;
      }
      
      button:active {
        transform: scale(0.95);
      }
      
      button:focus {
        outline: none;
      }
      
      button.ghost {
        background-color: transparent;
        border-color: #ffffff;
      }
      
      form {
        background-color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 50px;
        height: 100%;
        text-align: center;
        background-image: url('../images/circuit-2.png');
        background-size: 145em;
      }
      
      input {
        background-color: #eee;
        border: none;
        padding: 12px 15px;
        margin: 8px 0;
        width: 100%;
      }
      
      .form-container {
        position: absolute;
        top: 0;
        height: 100%;
        transition: all 0.6s ease-in-out;
      }
      
      .sign-in-container {
        left: 0;
        width: 50%;
        z-index: 2;
        background-image: url('../images/circuit-2.png');
        background-size: 100em;
      }
      
      .container.right-panel-active .sign-in-container {
        transform: translateX(100%);
      }
      
      .sign-up-container {
        left: 0;
        width: 50%;
        opacity: 0;
        z-index: 1;
      }
      
      /*colonne de gauche*/
      .container.right-panel-active .sign-up-container {
        transform: translateX(100%);
        opacity: 1;
        z-index: 5;
        animation: show 0.6s;
      }
      /**/
      @keyframes show {
        0%,
        49.99% {
          opacity: 0;
          z-index: 1;
        }
      
        50%,
        100% {
          opacity: 1;
          z-index: 5;
        }
      }
      /*colonne de droite*/
      .overlay-container {
        position: absolute;
        top: 0;
        left: 50%;
        width: 50%;
        height: 100%;
        overflow: hidden;
        transition: transform 0.6s ease-in-out;
        z-index: 100;
      }
      
      .container.right-panel-active .overlay-container {
        transform: translateX(-100%);
      }
      
      .overlay {
        background: #a136f6;
        background: -webkit-linear-gradient(to right, #a136f6, #221030);
        background: linear-gradient(to right, #a136f6, #221030);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 0 0;
        color: #ffffff;
        position: relative;
        left: -100%;
        height: 100%;
        width: 200%;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
      }
      
      .container.right-panel-active .overlay {
        transform: translateX(50%);
      }
      
      .overlay-panel {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 40px;
        text-align: center;
        top: 0;
        height: 100%;
        width: 50%;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
      }
      
      .overlay-left {
        transform: translateX(-20%);
      }
      
      .container.right-panel-active .overlay-left {
        transform: translateX(0);
      }
      
      .overlay-right {
        right: 0;
        transform: translateX(0);
      }
      
      .container.right-panel-active .overlay-right {
        transform: translateX(20%);
      }

}


/*------------------Mobile----------------------------*/
@media screen and (max-width: 768px) {


body {
        background: #f6f5f7;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        font-family: "Montserrat", sans-serif;
        height: 100vh;
        margin: -20px 0 50px;
      }

      
      h1 {
        font-weight: bold;
        margin: 0;
      }

      h1 .titre{
        font-size: larger;
      }
      
      h2 {
        text-align: center;
      }
      
      p {
        font-size: 16px;
        font-weight: 100;
        line-height: 20px;
        letter-spacing: 0.5px;
        margin: 20px 0 30px;
      }
      
      span {
        font-size: 12px;
      }
      
      a {
        color: #333;
        font-size: 14px;
        text-decoration: none;
        margin: 15px 0;
      }
      
      button {
        border-radius: 20px;
        border: 1px solid #a136f6;
        background-color: #a136f6;
        color: #ffffff;
        font-size: 12px;
        font-weight: bold;
        padding: 12px 45px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 80ms ease-in;
      }
      
      button:active {
        transform: scale(0.95);
      }
      
      button:focus {
        outline: none;
      }
      
      button.ghost {
        background-color: transparent;
        border-color: #ffffff;
      }
      
      form {
        background-color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 50px;
        height: 100%;
        text-align: center;
        background-image: url('../images/circuit-2.png');
        background-size: 145em;
      }
      
      input {
        background-color: #eee;
        border: none;
        padding: 12px 15px;
        margin: 8px 0;
        width: 100%;
      }
      
      .form-container {
        position: absolute;
        top: 0;
        height: 50%;
        transition: all 0.6s ease-in-out;
      }
      
      .sign-in-container {
        left: 0;
        width: 100%;
        z-index: 2;
        background-image: url('../images/circuit-2.png');
        background-size: 100em;
      }
      
      .container.right-panel-active .sign-in-container {
        transform: translateY(100%);
      }
      
      .sign-up-container {
        left: 0;
        width: 100%;
        opacity: 0;
        z-index: 1;
      }
      
      /*colonne de gauche*/
      .container.right-panel-active .sign-up-container {
        transform: translateY(100%);
        opacity: 1;
        z-index: 5;
        animation: show 0.6s;
      }
      /**/
      @keyframes show {
        0%,
        49.99% {
          opacity: 0;
          z-index: 1;
        }
      
        50%,
        100% {
          opacity: 1;
          z-index: 5;
        }
      }
      /*colonne de droite*/
      .overlay-container {
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 100%;
        height: 50%;
        overflow: visible;
        transition: transform 0.6s ease-in-out;
        z-index: 100;
      }
      
      .container.right-panel-active .overlay-container {
        transform: translateY(-150%);
      }
      
      .overlay {
        background: #a136f6;
        background: -webkit-linear-gradient(to right, #a136f6, #221030);
        background: linear-gradient(to right, #a136f6, #221030);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 0 0;
        color: #ffffff;
        position: relative;
        left: -100%;
        height: 100%;
        width: 200%;
        transform: translateY(0);
        transition: transform 0.6s ease-in-out;
      }
      
      .container.right-panel-active .overlay {
        transform: translateY(50%);
      }
      
      .overlay-panel {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 40px;
        text-align: center;
        top: 0;
        height: 50%;
        width: 100%;
        transform: translateY(0);
        transition: transform 0.6s ease-in-out;
      }
      
      .overlay-left {
        transform: translateY(-20%);
      }
      
      .container.right-panel-active .overlay-left {
        transform: translateY(0);
      }
      
      .overlay-right {
        right: 0;
        transform: translateY(-20%);
      }
      
      .container.right-panel-active .overlay-right {
        transform: translateY(0%);
      }

}