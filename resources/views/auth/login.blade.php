<html>
<style>
    * {
        font-family: -apple-system, BlinkMacSystemFont, "San Francisco", Helvetica, Arial, sans-serif;
        font-weight: 300;
        margin: 0;
    }

    html,
    body {
        height: 100vh;
        width: 100vw;
        margin: 0 0;
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        background: #f3f2f2;
    }

    h4 {
        font-size: 24px;
        font-weight: 600;
        color: #000;
        opacity: 0.85;
    }

    label {
        font-size: 12.5px;
        color: #000;
        opacity: 0.8;
        font-weight: 400;
    }

    form {
        padding: 40px 30px;
        background: #fefefe;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding-bottom: 20px;
        width: 300px;
    }

    form h4 {
        margin-bottom: 20px;
        color: rgba(0, 0, 0, 0.5);
    }

    form h4 span {
        color: black;
        font-weight: 700;
    }

    form p {
        line-height: 155%;
        margin-bottom: 5px;
        font-size: 14px;
        color: #000;
        opacity: 0.65;
        font-weight: 400;
        max-width: 200px;
        margin-bottom: 40px;
    }

    a.discrete {
        color: rgba(0, 0, 0, 0.4);
        font-size: 14px;
        border-bottom: solid 1px rgba(0, 0, 0, 0);
        padding-bottom: 4px;
        margin-left: auto;
        font-weight: 300;
        transition: all 0.3s ease;
        margin-top: 40px;
    }

    a.discrete:hover {
        border-bottom: solid 1px rgba(0, 0, 0, 0.2);
    }

    button {
        -webkit-appearance: none;
        width: auto;
        min-width: 100px;
        border-radius: 24px;
        text-align: center;
        padding: 15px 40px;
        margin-top: 5px;
        background-color: #93690f;
        color: #fff;
        font-size: 14px;
        margin-left: auto;
        font-weight: 500;
        box-shadow: 0px 2px 6px -1px rgba(0, 0, 0, 0.13);
        border: none;
        transition: all 0.3s ease;
        outline: 0;
    }

    button:hover {
        transform: translateY(-3px);
        box-shadow: 0 2px 6px -1px rgba(116, 78, 8, 0.65);
    }

    button:hover:active {
        transform: scale(0.99);
    }

    input {
        font-size: 16px;
        padding: 20px 0px;
        height: 56px;
        border: none;
        border-bottom: solid 1px rgba(0, 0, 0, 0.1);
        background: #fff;
        width: 280px;
        box-sizing: border-box;
        transition: all 0.3s linear;
        color: #000;
        font-weight: 400;
        -webkit-appearance: none;
    }

    input:focus {
        border-bottom: solid 1px #93690f;
        outline: 0;
        box-shadow: 0 2px 6px -8px rgba(132, 104, 11, 0.45);
    }

    .floating-label {
        position: relative;
        margin-bottom: 10px;
        width: 100%;
    }

    .floating-label label {
        position: absolute;
        top: calc(50% - 7px);
        left: 0;
        opacity: 0;
        transition: all 0.3s ease;
        padding-left: 44px;
    }

    .floating-label input {
        width: calc(100% - 44px);
        margin-left: auto;
        display: flex;
    }

    .floating-label .icon {
        position: absolute;
        top: 0;
        left: 0;
        height: 56px;
        width: 44px;
        display: flex;
    }

    .floating-label .icon svg {
        height: 30px;
        width: 30px;
        margin: auto;
        opacity: 0.15;
        transition: all 0.3s ease;
    }

    .floating-label .icon svg path {
        transition: all 0.3s ease;
    }

    .floating-label input:not(:-moz-placeholder-shown) {
        padding: 28px 0px 12px 0px;
    }

    .floating-label input:not(:-ms-input-placeholder) {
        padding: 28px 0px 12px 0px;
    }

    .floating-label input:not(:placeholder-shown) {
        padding: 28px 0px 12px 0px;
    }

    .floating-label input:not(:-moz-placeholder-shown)+label {
        transform: translateY(-10px);
        opacity: 0.7;
    }

    .floating-label input:not(:-ms-input-placeholder)+label {
        transform: translateY(-10px);
        opacity: 0.7;
    }

    .floating-label input:not(:placeholder-shown)+label {
        transform: translateY(-10px);
        opacity: 0.7;
    }

    .floating-label input:valid:not(:-moz-placeholder-shown)+label+.icon svg {
        opacity: 1;
    }

    .floating-label input:valid:not(:-ms-input-placeholder)+label+.icon svg {
        opacity: 1;
    }

    .floating-label input:valid:not(:placeholder-shown)+label+.icon svg {
        opacity: 1;
    }

    .floating-label input:valid:not(:-moz-placeholder-shown)+label+.icon svg path {
        fill: #93690f;
    }

    .floating-label input:valid:not(:-ms-input-placeholder)+label+.icon svg path {
        fill: #93690f;
    }

    .floating-label input:valid:not(:placeholder-shown)+label+.icon svg path {
        fill: #93690f;
    }

    .floating-label input:not(:valid):not(:focus)+label+.icon {
        -webkit-animation-name: shake-shake;
        animation-name: shake-shake;
        -webkit-animation-duration: 0.3s;
        animation-duration: 0.3s;
    }

    @-webkit-keyframes shake-shake {
        0% {
            transform: translateX(-3px);
        }

        20% {
            transform: translateX(3px);
        }

        40% {
            transform: translateX(-3px);
        }

        60% {
            transform: translateX(3px);
        }

        80% {
            transform: translateX(-3px);
        }

        100% {
            transform: translateX(0px);
        }
    }

    @keyframes shake-shake {
        0% {
            transform: translateX(-3px);
        }

        20% {
            transform: translateX(3px);
        }

        40% {
            transform: translateX(-3px);
        }

        60% {
            transform: translateX(3px);
        }

        80% {
            transform: translateX(-3px);
        }

        100% {
            transform: translateX(0px);
        }
    }

    .session {
        display: flex;
        flex-direction: row;
        width: auto;
        height: auto;
        margin: auto auto;
        background: #ffffff;
        border-radius: 4px;
        box-shadow: 0px 2px 6px -1px rgba(0, 0, 0, 0.12);
    }

    .left {
        width: 220px;
        height: auto;
        min-height: 100%;
        position: relative;
        background-size: cover;
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
    }

    .left svg {
        height: 40px;
        width: auto;
        margin: 20px;
    }
</style>

    <body>
        <div class="session">
            <div class="left" style="align-self: center;">
                <img src="{{ asset('assets/images/do.jpg') }}" alt="">
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h4><span>بـطــاقـة مــوظـــف</span></h4>
                <p>
                    @if ($errors->any())
                    <div>
                        <ul>
                            <span style="color: red;">البـيـانـات خـاطــئة حـاول مـن جديــد</span>
                            {{-- @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach --}}
                        </ul>
                    </div>
                    @endif
                </p>
                <div class="floating-label">

                    <input placeholder="الرقم الوضيفي" type="text" name="id_emp" id="id_emp">
                    <label for="id_emp">الرقم الوضيفي":</label>
                    <div class="icon">
                        <?xml version="1.0" encoding="UTF-8"?>
                        <svg enable-background="new 0 0 100 100" version="1.1" viewBox="0 0 100 100" xml:space="preserve"
                            xmlns="http://www.w3.org/2000/svg">
                            <style type="text/css">
                                .st0 {
                                    fill: none;
                                }
                            </style>
                            <g transform="translate(0 -952.36)">
                                <path
                                    d="m17.5 977c-1.3 0-2.4 1.1-2.4 2.4v45.9c0 1.3 1.1 2.4 2.4 2.4h64.9c1.3 0 2.4-1.1 2.4-2.4v-45.9c0-1.3-1.1-2.4-2.4-2.4h-64.9zm2.4 4.8h60.2v1.2l-30.1 22-30.1-22v-1.2zm0 7l28.7 21c0.8 0.6 2 0.6 2.8 0l28.7-21v34.1h-60.2v-34.1z" />
                            </g>
                            <rect class="st0" width="100" height="100" />
                        </svg>

                    </div>
                </div>
                <div class="floating-label">
                    <input placeholder="الرقم الوطني" type="text" name="emp_number" id="emp_number">
                    <label for="emp_number">الرقم الوطني:</label>
                    <div class="icon">

                        <?xml version="1.0" encoding="UTF-8"?>
                        <svg enable-background="new 0 0 24 24" version="1.1" viewBox="0 0 24 24" xml:space="preserve"
                            xmlns="http://www.w3.org/2000/svg">
                            <style type="text/css">
                                .st0 {
                                    fill: none;
                                }

                                .st1 {
                                    fill: #010101;
                                }
                            </style>
                            <rect class="st0" width="24" height="24" />
                            <path class="st1" d="M19,21H5V9h14V21z M6,20h12V10H6V20z" />
                            <path class="st1"
                                d="M16.5,10h-1V7c0-1.9-1.6-3.5-3.5-3.5S8.5,5.1,8.5,7v3h-1V7c0-2.5,2-4.5,4.5-4.5s4.5,2,4.5,4.5V10z" />
                            <path class="st1"
                                d="m12 16.5c-0.8 0-1.5-0.7-1.5-1.5s0.7-1.5 1.5-1.5 1.5 0.7 1.5 1.5-0.7 1.5-1.5 1.5zm0-2c-0.3 0-0.5 0.2-0.5 0.5s0.2 0.5 0.5 0.5 0.5-0.2 0.5-0.5-0.2-0.5-0.5-0.5z" />
                        </svg>
                    </div>

                </div>
                <button type="submit">تسجيل دخول</button>
            </form>
        </div>
    </body>

</html>
