<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Raleway', sans-serif; /* Adding Google Font 'Raleway' */
        }

        .welcome-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .welcome-text {
    font-size: 30px;
    font-weight: 700;
    text-transform: uppercase; /* Uppercase text for a stylish effect */
    background: linear-gradient(45deg, #6f42c1, #f39c12); /* Gradient background */
    background-clip: text; /* Clip text to the gradient background */
    -webkit-background-clip: text; /* For older browsers */
    color: transparent; /* Make text transparent to show the gradient background */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    letter-spacing: 2px;
    line-height: 1.2;
    border-radius: 5px;
    display: inline-block; /* Display as an inline block for better centering */
    padding: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Add a subtle box shadow */
}



        .sub-heading {
            color: #8a4baf; /* Beautiful Purplish */
            font-size: 24px;
            margin-top: 20px;
        }

        .btn-test {
            display: inline-block;
            padding: 15px 30px;
            background: linear-gradient(135deg, #3498db, #e74c3c);
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 20px;
            margin-top: 20px;
            transition: background 0.3s ease;
        }

        /* Style the button on hover */
        .btn-test:hover {
            background: linear-gradient(135deg, #e74c3c, #3498db);
            text-decoration: none;
            color: orange;
        }

        a {
            text-decoration: none;
        }

        /* Styles for the popup container */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            animation: fadeIn 0.5s ease; /* Add fade-in animation */
        }

        /* Styles for the popup content */
        .popup-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            text-align: center;
            animation: slideIn 0.5s ease; /* Add slide-in animation */
        }

        /* Close button style */
        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }

        /* Keyframes for animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translate(-50%, -70%);
                opacity: 0;
            }
            to {
                transform: translate(-50%, -50%);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <div class="app-main__outer">
        <div id="refreshData">
            <div class="welcome-container">
                <h2 class="welcome-text">Welcome to QWERTY.I/O Exam Portal</h2>
                <p class="sub-heading">Test yourself and get upskilled!</p>
                <a class="btn-test" href="#" id="show-popup">Get Started</a>
            </div>
            <div id="popup-container" class="popup">
                <div class="popup-content">
                    <span id="close-popup" class="close-button"><i class="fa fa-circle-o-notch" aria-hidden="true" style="font-size: 20px;"></i></span>
                    <h5>Hello!!</h5>
                    <!--<?php echo strtoupper($selExmneeData['student_fullname']);?>-->
                    <p>Hope you enjoyed the workshop. <br>
                    <p>Please click on the <b style="color: blue;"><i class="fa fa-bars" aria-hidden="true"></i></b> at the top left corner to proceed.</p>
                    <p>All the Best! 🎉</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('show-popup').addEventListener('click', function() {
            document.getElementById('popup-container').style.display = 'block';
        });

        document.getElementById('close-popup').addEventListener('click', function() {
            var popupContent = document.getElementById('popup-container');

            // // Add the fade-out animation
            // popupContent.style.animation = 'fadeOut 0.5s ease';

            // After the animation, hide the popup
            popupContent.addEventListener('animationend', function() {
                popupContent.style.display = 'none';
            });
        });
    </script>
</body>
</html>
