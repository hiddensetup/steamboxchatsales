
    let isTokenCopied = false;

    function showLoadingSpinner() {
        document.getElementById('loadingSpinner').style.display = 'block';
        document.getElementById('tokenContent').style.display = 'none';
    }

    function showTokenContent(token) {
        document.getElementById('loadingSpinner').style.display = 'none';
        document.getElementById('tokenDisplay').innerText = token;
        document.getElementById('tokenDisplay').classList.remove('copied'); // Remove copied class
        document.getElementById('tokenContent').style.display = 'block';
    }


 let countdown = 500; // 5 minutes in seconds

    function updateTimerDisplay() {
        const minutes = Math.floor(countdown / 60);
        const seconds = countdown % 60;
        document.getElementById('timer').innerText = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
    }

   function updateCountdown() {
    countdown--;
    updateTimerDisplay();

    if (countdown <= 0) {
        redirectToHomePage();
    } else {
        setTimeout(updateCountdown, 1000); // Update countdown every second
    }
}

function redirectToHomePage() {
    window.location.href = 'https://steamboxchat.com';
}





    // function copyToken() {
    //     if (!isTokenCopied) {
    //         var tokenDisplay = document.getElementById('tokenDisplay');
    //         var range = document.createRange();
    //         range.selectNode(tokenDisplay);
    //         window.getSelection().removeAllRanges();
    //         window.getSelection().addRange(range);
    //         document.execCommand('copy');
    //         window.getSelection().removeAllRanges();

    //         // Add copied class and set the flag
    //         tokenDisplay.classList.add('copied');
    //         isTokenCopied = true;

    //         alert('Token copiado al portapapeles');
    //     }
    // }

    // function fetchToken() {
    //     if (!isTokenCopied) {
    //         showLoadingSpinner();
    //         // Fetch the token from token.php
    //         fetch('token.php')
    //             .then(response => response.text())
    //             .then(token => {
    //                 showTokenContent(token);
    //                 setTimeout(fetchToken, 10000); // Fetch a new token after 10 seconds
    //             })
    //             .catch(error => {
    //                 console.error('Error fetching token:', error);
    //             });
    //     }
    // }

    // // Initial fetch
    // fetchToken();
    
    
    function fetchServiceStatus() {
        fetch('servicestatus.php')
            .then(response => response.json())
            .then(data => {
                updateStatus('usaStatus', data.usa);
                updateStatus('brasilStatus', data.brasil);
                updateStatus('generalStatus', data.general);
                setTimeout(fetchServiceStatus, 1000); // Fetch new status after 10 seconds
            })
            .catch(error => {
                console.error('Error fetching service status:', error);
            });
    }

    function updateStatus(elementId, status) {
        const statusElement = document.getElementById(elementId);
        statusElement.querySelector('strong').innerText = status;
    }
    
   // Initial setup
    updateTimerDisplay();
    updateCountdown();
    fetchServiceStatus();
 


    // Set up copy button click event
    <!--document.getElementById('copyButton').addEventListener('click', copyToken);-->