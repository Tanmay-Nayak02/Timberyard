<!DOCTYPE html>
<html>

<head>
    <title>Order form</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" />
    <link rel="stylesheet" href="css2.css" />
    <style>
        html,
        body {
            height: 100%;
        }

        body,
        input,
        select {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 16px;
            color: #eee;
        }

        h1,
        h3 {
            font-weight: 400;
        }

        h1 {
            font-size: 32px;
        }

        h3 {
            color: #1c87c9;
        }

        .main-block,
        .info {

            display: flex;
            flex-direction: column;
        }

        .main-block {
            justify-content: center;
            align-items: center;
            width: 100%;
            min-height: 100%;
            background-image: linear-gradient(rgb(41, 194, 21), rgb(0, 204, 255));
            background-size: cover;
            background-position: center;
        }

        form {
            width: 80%;
            padding: 25px;
            margin-bottom: 20px;
            background: rgba(0, 0, 0, 0.9);
        }


        input,
        select {
            padding: 5px;
            margin-bottom: 20px;
            background: transparent;
            border: none;
            border-bottom: 1px solid #eee;
        }

        input::placeholder {
            color: #eee;
        }


        .metod {
            display: flex;
        }

        input[type="radio"] {
            display: none;
        }

        label.radio {
            position: relative;
            display: inline-block;
            margin-right: 20px;
            text-indent: 32px;
            cursor: pointer;
        }

        label.radio:before {
            content: "";
            position: absolute;
            top: -1px;
            left: 0;
            width: 17px;
            height: 17px;
            border-radius: 50%;
            border: 2px solid #1c87c9;
        }

        label.radio:after {
            content: "";
            position: absolute;
            width: 8px;
            height: 4px;
            top: 5px;
            left: 5px;
            border-bottom: 3px solid #1c87c9;
            border-left: 3px solid #1c87c9;
            transform: rotate(-45deg);
            opacity: 0;
        }

        input[type="radio"]:checked+label:after {
            opacity: 1;
        }

        button {
            display: block;
            width: 200px;
            padding: 10px;
            margin: 20px auto 0;
            border: none;
            border-radius: 5px;
            background: #1c87c9;
            font-size: 14px;
            font-weight: 600;
            color: #fff;
        }

        button:hover {
            background: #095484;
        }

        @media (min-width: 568px) {
            input {
                width: 46%;
            }

            input.fname {
                width: 100%;
            }

            select {
                width: 48%;
            }
        }
    </style>
</head>

<body>

    <div class="main-block">

        <form method="post" action="save.php">



            <section>

                <h1 style="margin-bottom: 30px;">Order Details</h1>
                <div class="tbl-header">
                    <table cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <th>COD NO</th>
                                <th>Product Name</th>
                                <th>Price /Unit (R)</th>
                                <th>No Of Items</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="tbl-content">
                    <table cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td><input type="number" name="teakc" id="teakc" value="0" readonly /></td>
                                <td>Teak</td>
                                <td>15000</td>
                                <td> <input type="number" name="teakp" id="teakp" value="0" readonly /> </td>
                                <td><input type="number" name="teakt" id="teakt" value="0" readonly /></td>
                            </tr>
                            <tr>
                                <td><input type="number" name="silverc" id="silverc" value="0" readonly /></td>
                                <td>Silver Oak</td>
                                <td>10000</td>
                                <td> <input type="number" name="silverp" id="silverp" value="0" readonly /> </td>
                                <td><input type="number" name="silvert" id="silvert" value="0" readonly /></td>
                            </tr>
                            <tr>
                                <td><input type="number" name="sandalc" id="sandalc" value="0" readonly /></td>
                                <td>Sandalwood</td>
                                <td>50000</td>
                                <td> <input type="number" name="sandalp" id="sandalp" value="0" readonly /> </td>
                                <td><input type="number" name="sandalt" id="sandalt" value="0" readonly /></td>
                            </tr>
                            <tr>
                                <td><input type="number" name="pinkc" id="pinkc" value="0" readonly /></td>
                                <td>Pink ivory</td>
                                <td>30000</td>
                                <td> <input type="number" name="pinkp" id="pinkp" value="0" readonly /> </td>
                                <td><input type="number" name="pinkt" id="pinkt" value="0" readonly /></td>
                            </tr>
                            <tr>
                                <td><input type="number" name="blackc" id="blackc" value="0" readonly /></td>
                                <td>Blackwood</td>
                                <td>38000</td>
                                <td> <input type="number" name="blackp" id="blackp" value="0" readonly /> </td>
                                <td><input type="number" name="blackt" id="blackt" value="0" readonly /></td>
                            </tr>
                            <tr>
                                <td><input type="number" name="neemc" id="neemc" value="0" readonly /></td>
                                <td>Neem</td>
                                <td>10000</td>
                                <td> <input type="number" name="neemp" id="neemp" value="0" readonly /> </td>
                                <td><input type="number" name="neemt" id="neemt" value="0" readonly /></td>
                            </tr>
                            <tr>
                                <td><input type="number" name="bambooc" id="bambooc" value="0" readonly /></td>
                                <td>Bamboo</td>
                                <td>13000</td>
                                <td> <input type="number" name="bamboop" id="bamboop" value="0" readonly /> </td>
                                <td><input type="number" name="bamboot" id="bamboot" value="0" readonly /></td>
                            </tr>


                            <tr>
                                <td><input type="number" name="redc" id="redc" value="0" readonly /></td>
                                <td>Red cotton silk</td>
                                <td>10000</td>
                                <td><input type="number" name="redp" id="redp" value="0" readonly /></td>
                                <td><input type="number" name="redt" id="redt" value="0" readonly /></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="info" style="padding-top: 60px;">


                    <input type="email" id="email" name="email" placeholder="Email" required readonly />
                    <input type="textarea" name="address" placeholder="Address" required />
                    <input type="text" id="city" name="city" placeholder="City" required readonly />
                    <input type="text" id="pincode" name="pin" placeholder="Pincode" min="581301" required />
                    <input type="tel" id="phone" name="phone" placeholder="Phone Number" pattern="[0-9]{10}" required><br /><br /><br />
                    <h3>Total Cost</h3>

                    <input type="number" id="totalc" name="totalc" value="" readonly />
                    <script> </script>
                </div>
                <h3>Payment Method</h3>

                <div class="metod">
                    <div>
                        <input type="radio" value="Cash" id="radioOne" name="method" checked />
                        <label for="radioOne" class="radio">Cash On Delivery</label>
                    </div>
                    <div>
                        <input type="radio" value="Online" id="radioTwo" name="method" />
                        <label for="radioTwo" class="radio">Online Payment</label>
                    </div>
                </div>
                <button href="/" name="order" class="button">Place The Order</button>
            </section>
        </form>



    </div>

    </div>

    <script src="js2.js"></script>
    <script>
        var xhr = new XMLHttpRequest();
        xhr.open("get", "Pin.json");
        document.getElementById("pincode").addEventListener('change', function () {
            xhr.send();
        });

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    var result_data = JSON.parse(xhr.responseText);
                    var city = "";
                    var pincode = document.getElementById("pincode").value;

                    for (i = 0; i < result_data.length; i++) {
                        var current_record = result_data[i];
                        if (pincode == current_record.pin) {
                            city = city + current_record.city;
                            break;
                        }
                    }

                    document.getElementById("city").value = city;
                } else {
                    alert("Enter the valid pincode!");
                }
            }
        };
    </script>

</body>

</html>