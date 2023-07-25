    // Generate a random alphanumeric CAPTCHA code
    function generateCaptchaCode() {
        const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        let code = '';
        for (let i = 0; i < 6; i++) {
          code += chars.charAt(Math.floor(Math.random() * chars.length));
        }
        return code;
      }
  
      // Create the CAPTCHA image and return the CAPTCHA code
      function createCaptcha() {
        const captchaCode = generateCaptchaCode();
        const captchaImage = document.getElementById('captchaImage');
        // Replace the following URL with your server-side script to generate the CAPTCHA image
        captchaImage.src = 'https://via.placeholder.com/150?text=' + captchaCode;
        captchaImage.alt = captchaCode; // Store the CAPTCHA code as alt text for validation
        return captchaCode;
      }
  
      // Refresh the CAPTCHA
      document.getElementById('refreshCaptcha').addEventListener('click', function() {
        createCaptcha();
      });
  
      // Validate the CAPTCHA on form submission
      document.getElementById('signupForm').addEventListener('submit', function(event) {
        const captchaInput = document.querySelector('input[name="captchaInput"]');
        const captchaImage = document.getElementById('captchaImage');
  
        if (captchaInput.value !== captchaImage.alt) {
          event.preventDefault();
          alert('Invalid CAPTCHA. Please try again.');
          captchaInput.value = '';
          createCaptcha();
        }
      });
  
      // Generate the initial CAPTCHA when the page loads
      createCaptcha();