<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
</head>
<body>
    {{-- Navigation Bar --}}
  <nav class="navbar">
    <!-- Left side - Logo and links -->
    <div class="navbar-left">
      <div class="logo-container">
        <img src="{{ asset('assets/chatwave.png') }}" alt="WhatsApp Logo" class="logo" />
      </div>

      <div class="navbar-links">
        <a >Features</a>
        <a >Privacy</a>
        <a >Help Center</a>
        <a >Apps</a>
      </div>
    </div>

    <!-- Right side - Log In and Download buttons -->
    <div class="navbar-right">
      <a>
        <button class="login-button">Log In</button>
      </a>
      <button class="download-button">Download</button>
    </div>
  </nav>

  {{-- Section one --}}
  <section class="section-one">
    <div class="container">
      <!-- Left Side: Text Section -->
      <div class="text-section">
        <h1>Let’s Connect <br /> with Your Friend <br /> in Real Time</h1>

        <a href="/auth">
          <button class="start-button">Start Chatting Now</button>
        </a>

        <!-- Stats Section -->
        <div class="stats-section">
          <div class="users">
            <img
              src="https://randomuser.me/api/portraits/men/32.jpg"
              alt="User"
              class="user-image"
            />
            <img
              src="https://randomuser.me/api/portraits/women/44.jpg"
              alt="User"
              class="user-image overlap"
            />
            <p class="stats-text">
              20+ <br />
              <span>Happy Customers</span>
            </p>
          </div>

          <div class="rating">
            2.5/5 <br />
            <span>Rating</span>
          </div>
        </div>
      </div>

      <!-- Right Side: Image Section -->
      <div class="image-section">
        <img
          src="https://img.freepik.com/free-vector/conversation-concept-illustration_114360-1305.jpg?w=740&t=st=1724871547~exp=1724872147~hmac=d39930e9f3c3337fb5876fd3ec18e8091f4e8b65c2e2c0fc6ac3b3defe6ec792"
          alt="Person with phone"
          class="main-image"
        />

        <!-- Chat Bubbles -->
        <div class="chat-bubble chat-left">
          <p class="chat-name">Rihana</p>
          <p class="chat-text">Hii</p>
        </div>

        <div class="chat-bubble chat-right">
          <p class="chat-name">Random Khan</p>
          <p class="chat-text">Bye</p>
        </div>
      </div>
    </div>
  </section>

   {{-- section two --}}
   <section class="section-two">
    <div class="container">
      <h2>Features For a Better Experience</h2>
      <div class="features-grid">
        <!-- Feature 1 -->
        <div class="feature-card">
          <div class="icon-container">
            <i class="fas fa-play icon"></i>
          </div>
          <h3>Messaging</h3>
          <p>
            This software is very easy for you to manage. You can use it as you
            wish.
          </p>
        </div>

        <!-- Feature 2 -->
        <div class="feature-card">
          <div class="icon-container">
            <i class="fas fa-clock icon"></i>
          </div>
          <h3>Save Your Time</h3>
          <p>
            This software is very easy for you to manage. You can use it as you
            wish.
          </p>
        </div>

        <!-- Feature 3 -->
        <div class="feature-card">
          <div class="icon-container">
            <i class="fas fa-user-shield icon"></i>
          </div>
          <h3>Keep Safe & Private</h3>
          <p>
            This software is very easy for you to manage. You can use it as you
            wish.
          </p>
        </div>
      </div>
    </div>
  </section>

  {{-- Section Three --}}
  <div class="section-three">
    <div class="content-container">
      <!-- Left Section with User Images and Messages -->
      <div class="left-section">
        <div class="user">
          <img
            src="https://images.unsplash.com/photo-1522125670776-3c7abb882bc2?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3"
            alt="User 1"
            class="user-image"
          />
          <div class="message">Hello, I need some help</div>
        </div>

        <div class="user">
          <img
            src="https://plus.unsplash.com/premium_photo-1721955487786-76802cbf0812?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3"
            alt="User 2"
            class="user-image"
          />
          <div class="message">Hey, how can I help you?</div>
        </div>
      </div>

      <!-- Right Section with Text Content -->
      <div class="right-section">
        <h1>Your friends come to your phone.</h1>
        <p>
          The term chatting or chitchat refers to communication between two or
          more parties that can occur in person or over the internet via SMS or
          multimedia messaging.
        </p>
      </div>
    </div>

    <!-- Bottom Section with Call to Action -->
    <div class="cta-container">
      <h1>Get better work done</h1>
      <p>See why millions of people across 195 countries use Dash.</p>
      <div class="button-container">
        <a href="/auth">
          <button class="cta-button">Try for free</button>
        </a>
      </div>
    </div>
  </div>

  {{-- section 4 --}}
  <div class="section-four">
    <div class="content-container">
      <!-- Left Section (Text Content) -->
      <div class="text-content">
        <h3>Why ChatWave?</h3>
        <h1>Our mission is user convenience</h1>
        <p>
          ChatWave makes your communication with relatives, work friends, and
          family more fun. Stay connected with them with plentiful features.
        </p>
      </div>

      <!-- Right Section (Stats) -->
      <div class="stats-grid">
        <div class="stat-item">
          <i class="fa fa-comments"></i>
          <div>
            <h2>20+</h2>
            <p>Message Sent</p>
          </div>
        </div>

        <div class="stat-item">
          <i class="fa fa-users"></i>
          <div>
            <h2>5+</h2>
            <p>Active User</p>
          </div>
        </div>

        <div class="stat-item">
          <i class="fa fa-globe"></i>
          <div>
            <h2>1+</h2>
            <p>Available Countries</p>
          </div>
        </div>

        <div class="stat-item">
          <i class="fa fa-bolt"></i>
          <div>
            <h2>0x</h2>
            <p>Send & Upload Speed</p>
          </div>
        </div>
      </div>
    </div>
  </div>
      {{-- Footer --}}
      <div class="footer">
        <div class="footer-container">
          <div class="footer-grid">
            <!-- Logo Section -->
            <div class="footer-col">
              <img src="./assets/chatwave.png" alt="WhatsApp Logo" class="logo" />
              <a href="/auth">
                <button class="chat-now-btn">Chat Now</button>
              </a>
            </div>
    
            <!-- Who We Are Section -->
            <div class="footer-col">
              <h4>Who we are</h4>
              <ul>
                <li><a href="#">About us</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Brand Center</a></li>
                <li><a href="#">Privacy</a></li>
              </ul>
            </div>
    
            <!-- Use WhatsApp Section -->
            <div class="footer-col">
              <h4>Use WhatsApp</h4>
              <ul>
                <li><a href="#">Android</a></li>
                <li><a href="#">iPhone</a></li>
                <li><a href="#">Mac/PC</a></li>
                <li><a href="#">WhatsApp Web</a></li>
              </ul>
            </div>
    
            <!-- Help Section -->
            <div class="footer-col">
              <h4>Need help?</h4>
              <ul>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Apps</a></li>
                <li><a href="#">Security Advisories</a></li>
              </ul>
            </div>
          </div>
    
          <div class="footer-divider"></div>
    
          <div class="footer-bottom">
            <div class="footer-text">
              <p>2024 © Chatwave LLC</p>
              <p>
                <a href="#">Terms & Privacy Policy</a> | <a href="#">Sitemap</a>
              </p>
            </div>
    
            <div class="social-icons">
              <i class="fa-brands fa-square-x-twitter"></i>
              <i class="fa-brands fa-youtube"></i>
              <i class="fa-brands fa-instagram"></i>
              <i class="fa-brands fa-facebook-f"></i>
            </div>
          </div>
        </div>
      </div>

</body>
</html>
