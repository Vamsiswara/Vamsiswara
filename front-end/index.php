<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: home.php"); // Redirect to registration/login page
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <style>
        #chat-container {
    position: fixed;
    bottom: 0;
    left: 0;
    height: 80%;
    width: 100%;
    border: 1px solid #ccc;
    padding: 10px;
    background: #161d28c4;
    display: none;
}

        #chat-log {
            height: 200px;
            overflow-y: scroll;
            border-bottom: 1px solid #ccc;
            margin-bottom: 10px;
            display: none;
        }

        #user-input {
            width: calc(100% - 10px);
            margin-right: 5px;
        }

        #open-chat-btn {
            position: fixed;
            bottom: 10px;
            right: 10px;
            cursor: pointer;
            background: linear-gradient(65deg, #0270D7 0, #0F8AFD 100%);            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
        }

        #close-chat-btn {
            cursor: pointer;
            background: linear-gradient(65deg, #0270D7 0, #0F8AFD 100%);            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
       <style data-emotion="react-scroll-to-bottom--css-lokzn" data-s=""></style>
       <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="sytlesheet" href="dist/css/style.css">
    <title>Mega Bot</title>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
	<script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>



<body class="is-boxed has-animations">
    <div class="body-wrap">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
							<a href="#">
								<img class="header-logo-image" src="dist/images/logo.svg" alt="Logo">
                            </a>
                        </h1>

                    <div  class="hero-cta button button-primary" onclick="toggleChat()">Open Chat</div>
                    <a href="logout.php"><div class="hero-cta button button-primary" >Logout</div></a>
                    <div  class="hero-cta button button-primary" >Home</div>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
						<div class="hero-copy">
	                        <h1 class="hero-title mt-0">Mega Bot</h1>
	                        <p class="hero-paragraph">Welcome to MegaBot - Your Ultimate Government Schemes Information Chatbot.</p>
	                        <?php
if (!isset($_SESSION['email'])) {
    echo '<div class="hero-cta"><a class="button button-primary" href="register.php">Register</a><a class="button" href="login.php">Login</a></div>';
}else{
    echo '<div  class="hero-cta button button-primary" onclick="toggleChat()">Open Chat</div>';
}
?>

                        </div>
						<div class="hero-figure anime-element">
							<svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
								<rect width="528" height="396" style="fill:transparent;" />
							</svg>
							<div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
							<div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
							<div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
							<div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
							<div class="hero-figure-box hero-figure-box-05"></div>
							<div class="hero-figure-box hero-figure-box-06"></div>
							<div class="hero-figure-box hero-figure-box-07"></div>
							<div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
							<div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
							<div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
						</div>
                    </div>
                </div>
            </section>

            <section class="features section">
                <div class="container">
					<div class="features-inner section-inner has-bottom-divider">
                        <div class="features-wrap">
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="dist/images/feature-icon-01.svg" alt="Feature 01">
                                    </div>
                                    <h4 class="feature-title mt-24">Extensive Scheme Database</h4>
                                    <p class="text-sm mb-0">MegaBot is equipped with an extensive database containing details about a wide range of government-sponsored schemes. Whether you're interested in loans for agriculture, education, or insurance policies, MegaBot has got you covered.</p>
                                </div>
                            </div>
							<div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="dist/images/feature-icon-02.svg" alt="Feature 02">
                                    </div>
                                    <h4 class="feature-title mt-24">Real-time Updates</h4>
                                    <p class="text-sm mb-0">Stay informed with the latest updates on government schemes. MegaBot regularly pulls information from reliable sources to ensure that you have access to the most recent announcements, changes, and additions to existing schemes.</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="dist/images/feature-icon-03.svg" alt="Feature 03">
                                    </div>
                                    <h4 class="feature-title mt-24">Interactive Conversations</h4>
                                    <p class="text-sm mb-0">MegaBot is designed to engage in interactive and user-friendly conversations. Simply start a chat, ask questions, and receive instant responses tailored to your specific needs.</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="dist/images/feature-icon-04.svg" alt="Feature 04">
                                    </div>
                                    <h4 class="feature-title mt-24">Easy Navigation</h4>
                                    <p class="text-sm mb-0">Our user-friendly interface makes it easy to navigate through different categories of government schemes. Whether you're a farmer, student, or entrepreneur, MegaBot provides a seamless browsing experience.</p>
                                </div>
                            </div>
							<div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="dist/images/feature-icon-05.svg" alt="Feature 05">
                                    </div>
                                    <h4 class="feature-title mt-24">Personalized Recommendations</h4>
                                    <p class="text-sm mb-0">MegaBot goes beyond providing generic information. By understanding your requirements, it offers personalized recommendations for schemes that match your needs and eligibility criteria.</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="dist/images/feature-icon-06.svg" alt="Feature 06">
                                    </div>
                                    <h4 class="feature-title mt-24">Resource Integration</h4>
                                    <p class="text-sm mb-0">MegaBot integrates information from trusted sources like NABARD, RBI, and other government agencies, ensuring the reliability and accuracy of the data provided.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

           
        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-inner">
                    <div class="brand footer-brand">
						<a href="#">
							<img class="header-logo-image" src="dist/images/logo.svg" alt="Logo">
						</a>
                    </div>
                    <ul class="footer-links list-reset">
                        <li>
                            <a href="#">Contact</a>
                        </li>
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">FAQ's</a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                    </ul>
                    <ul class="footer-social-links list-reset">
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Facebook</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#0270D7"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Twitter</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#0270D7"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Google</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#0270D7"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyright">&copy; 2019 Solid, all rights reserved</div>
                </div>
            </div>
        </footer>
    </div>

    <script src="dist/js/main.min.js"></script>

    <div id="open-chat-btn"  onclick="toggleChat()">Open Chat</div>

    <div id="chat-container">
        <div id="chat-log"></div>
        <input type="text" id="user-input" placeholder="Type your message">
        <button onclick="sendMessage()">Send</button>
        <div id="close-chat-btn" onclick="closeChat()">Close Chat</div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function closeChat() {
        $('#chat-container').slideToggle();
        $('#chat-log').fadeToggle();
        $('.hero-copy').show();
    }
    function toggleChat() {
        $('#chat-container').slideToggle();
        $('#chat-log').fadeToggle();
        $('.hero-copy').hide();
    }

    function animateWords($element, words, index) {
        if (index < words.length) {
            $element.append(' ' + words[index]);
            index++;
            setTimeout(function () {
                animateWords($element, words, index);
            }, 200); // Adjust the timeout for the speed of the animation
        }
    }

    function sendMessage() {
        var userMessage = $('#user-input').val();
        
        // Display user message in the chat log with word animation
        var $userMessageDiv = $('<div class="flex items-center relative text-gray-200 bg-gray-800 dark:bg-token-surface-primary px-4 py-2 text-xs font-sans justify-between rounded-t-md">User:</div>');
        $('#chat-log').append($userMessageDiv);

        var userWords = userMessage.split(' ');
        animateWords($userMessageDiv, userWords, 0);

        $('#user-input').val(''); // Clear the input field

        // Use AJAX to send the message to Flask API
        $.ajax({
            type: 'POST',
            url: 'process.php',
            data: {
                'user-input': userMessage
            },
            success: function(response) {
                // Display bot response in the chat log with word animation
                var $botResponseDiv = $('<div class="bot-response"></div>');
                $('#chat-log').append($botResponseDiv);

                var botWords = response.split(' ');
                animateWords($botResponseDiv, botWords, 0);
            },
            error: function(error) {
                console.error('Error:', error);
            }
        });
    }
</script>


</body>

</html>