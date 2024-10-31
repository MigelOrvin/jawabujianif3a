<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="text-align: center; background-color: grey">
        <h1 style="color:black">Pendaftaran Pasien</h1>
    </div>

    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
            <form action="{{Route('store')}}" method="POST">
                @csrf
                <div class="formbold-input-group">
                    <label for="name" class="formbold-form-label"> Name </label>
                    <input
                        type="text"
                        name="nama"
                        id="nama"
                        placeholder="Masukkan Nama"
                        class="formbold-form-input" />
                </div>

                <div class="formbold-input-group">
                    <label for="email" class="formbold-form-label"> Alamat </label>
                    <input
                        type="text"
                        name="alamat"
                        id="alamat"
                        placeholder="Masukkan Alamat"
                        class="formbold-form-input" />
                </div>

                <div class="formbold-input-group">
                    <label for="umur" class="formbold-form-label"> Umur </label>
                    <input
                        type="integer"
                        name="umur"
                        id="umur"
                        placeholder="Umur"
                        class="formbold-form-input" />
                </div>


                <div class="formbold-input-radio-wrapper">
                    <label for="ans" class="formbold-form-label">
                        Jenis Kelamin Anda?
                    </label>

                    <div class="formbold-radio-flex">
                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input
                                    class="formbold-input-radio"
                                    type="radio"
                                    name="ans"
                                    id="Laki-Laki"
                                    value="Laki-Laki" />
                                Laki-Laki
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>

                        <div class="formbold-radio-group">
                            <label class="formbold-radio-label">
                                <input
                                    class="formbold-input-radio"
                                    type="radio"
                                    name="ans"
                                    id="Perempuan" 
                                    value="Perempuan"/>
                                Perempuan
                                <span class="formbold-radio-checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>



                <button class="formbold-btn">Submit</button>
            </form>
            
        </div>
        
    </div>
    <div style="display: flex; justify-content: center;">
    <a href="{{ route('tampil') }}">Lihat Data Pasien</a>
</div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        a{
        text-align: center;
            width: 20%;
            font-size: 16px;
            border-radius: 5px;
            padding: 14px 25px;
            border: none;
            font-weight: 500;
            background-color: grey;
            color: white;
            cursor: pointer;
            margin-top: 25px;
    }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #454f4a;
        }

        .formbold-main-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px;
        }

        .formbold-form-wrapper {
            margin: 0 auto;
            max-width: 570px;
            width: 100%;
            background: white;
            padding: 40px;
        }

        .formbold-form-img {
            margin-bottom: 45px;
        }

        .formbold-input-group {
            margin-bottom: 18px;
        }

        .formbold-form-select {
            width: 100%;
            padding: 12px 22px;
            border-radius: 5px;
            border: 1px solid #dde3ec;
            background: #ffffff;
            font-size: 16px;
            color: #536387;
            outline: none;
            resize: none;
        }

        .formbold-input-radio-wrapper {
            margin-bottom: 25px;
        }

        .formbold-radio-flex {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .formbold-radio-label {
            font-size: 14px;
            line-height: 24px;
            color: #07074d;
            position: relative;
            padding-left: 25px;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .formbold-input-radio {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .formbold-radio-checkmark {
            position: absolute;
            top: -1px;
            left: 0;
            height: 18px;
            width: 18px;
            background-color: #ffffff;
            border: 1px solid #dde3ec;
            border-radius: 50%;
        }

        .formbold-radio-label .formbold-input-radio:checked~.formbold-radio-checkmark {
            background-color: #6a64f1;
        }

        .formbold-radio-checkmark:after {
            content: '';
            position: absolute;
            display: none;
        }

        .formbold-radio-label .formbold-input-radio:checked~.formbold-radio-checkmark:after {
            display: block;
        }

        .formbold-radio-label .formbold-radio-checkmark:after {
            top: 50%;
            left: 50%;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #ffffff;
            transform: translate(-50%, -50%);
        }

        .formbold-form-input {
            width: 100%;
            padding: 13px 22px;
            border-radius: 5px;
            border: 1px solid #dde3ec;
            background: #ffffff;
            font-weight: 500;
            font-size: 16px;
            color: #07074d;
            outline: none;
            resize: none;
        }

        .formbold-form-input::placeholder {
            color: #536387;
        }

        .formbold-form-input:focus {
            border-color: #6a64f1;
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        .formbold-form-label {
            color: #07074d;
            font-size: 14px;
            line-height: 24px;
            display: block;
            margin-bottom: 10px;
        }

        .formbold-btn {
            text-align: center;
            width: 100%;
            font-size: 16px;
            border-radius: 5px;
            padding: 14px 25px;
            border: none;
            font-weight: 500;
            background-color: grey;
            color: white;
            cursor: pointer;
            margin-top: 25px;
        }

        .formbold-btn:hover {
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }
    </style>
</body>

</html>