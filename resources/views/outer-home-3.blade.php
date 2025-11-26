<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Grekam Visuals's WBOT — Official WhatsApp Business API</title>
  <meta name="description" content="Meta-Verified WhatsApp Business API platform to automate customer engagement, boost sales, and scale support." />
  <meta name="theme-color" content="#2CA16D" />
  <meta name="facebook-domain-verification" content="8n5vtmqpz4tj0di6vjbzikib10bsxb" />
  <link rel="icon" href="/logo.svg" />
  <style>
    :root { 
      --primary: #2CA16D; 
      --secondary: #E29A2E; 
      --bg: #FFFFFF; 
      --card: #FFFFFF; 
      --text: #0B0D10; 
      --muted: #4B5563; 
      --border: #E5E7EB; 
    }
    
    * { box-sizing: border-box; }
    
    html, body {
      margin: 0;
      padding: 0;
      background: #ffffff;
      color: var(--text);
      font: 14px/1.5 system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, "Helvetica Neue", Arial, sans-serif;
    }
    
    @media (min-width: 640px) {
      html, body { font-size: 16px; }
    }
    
    a { color: var(--primary); text-decoration: none; }
    a:hover { text-decoration: underline; }
    
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 16px;
    }
    
    @media (min-width: 640px) {
      .container { padding: 0 24px; }
    }
    
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 12px 20px;
      border-radius: 10px;
      border: 1px solid var(--border);
      background: var(--primary);
      color: white;
      font-weight: 600;
      font-size: 14px;
      cursor: pointer;
      text-align: center;
      transition: all 0.2s ease;
      min-height: 44px;
    }
    
    .btn:hover {
      background: #238B5B;
      text-decoration: none;
    }
    
    .btn.secondary {
      background: transparent;
      color: var(--text);
      border-color: var(--border);
    }
    
    .btn.secondary:hover {
      background: #f9fafb;
    }
    
    .btn.block { width: 100%; }
    
    .badge {
      display: inline-block;
      border: 1px solid var(--border);
      padding: 8px 12px;
      border-radius: 999px;
      background: rgba(0,0,0,0.04);
      font-size: 12px;
    }
    
    header {
      position: sticky;
      top: 0;
      backdrop-filter: saturate(180%) blur(8px);
      background: rgba(255,255,255,0.9);
      border-bottom: 1px solid var(--border);
      z-index: 50;
    }
    
    .header-content {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 12px 0;
      gap: 16px;
    }
    
    .logo-container {
      display: flex;
      align-items: center;
      gap: 8px;
    }
    
    .logo-img {
      height: 32px;
      width: auto;
    }
    
    @media (min-width: 768px) {
      .logo-img { height: 48px; }
    }
    
    nav {
      display: none;
    }
    
    @media (min-width: 768px) {
      nav {
        display: flex;
        gap: 24px;
      }
      nav a {
        color: var(--text);
        font-weight: 500;
        transition: color 0.2s ease;
      }
      nav a:hover { color: var(--primary); }
    }
    
    .header-actions {
      display: none;
      gap: 8px;
    }
    
    @media (min-width: 768px) {
      .header-actions { display: flex; }
    }
    
    section {
      padding: 48px 0;
    }
    
    @media (min-width: 768px) {
      section { padding: 64px 0; }
    }
    
    .grid {
      display: grid;
      gap: 16px;
    }
    
    @media (min-width: 640px) {
      .grid { gap: 20px; }
    }
    
    .grid-2 { grid-template-columns: 1fr; }
    .grid-3 { grid-template-columns: 1fr; }
    .grid-4 { grid-template-columns: 1fr; }
    .grid-5 { grid-template-columns: 1fr; }
    
    @media (min-width: 640px) {
      .grid-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    }
    
    @media (min-width: 768px) {
      .grid-3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
      .grid-4 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
      .grid-5 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
    }
    
    @media (min-width: 1024px) {
      .grid-4 { grid-template-columns: repeat(4, minmax(0, 1fr)); }
      .grid-5 { grid-template-columns: repeat(5, minmax(0, 1fr)); }
    }
    
    .card {
      border: 1px solid var(--border);
      background: var(--card);
      border-radius: 16px;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }
    
    .card-pad {
      padding: 20px;
    }
    
    @media (min-width: 640px) {
      .card-pad { padding: 24px; }
    }
    
    .muted { color: var(--muted); }
    .center { text-align: center; }
    
    .title {
      font-size: 24px;
      font-weight: 800;
      line-height: 1.2;
      margin: 0;
    }
    
    @media (min-width: 640px) {
      .title { font-size: 28px; }
    }
    
    @media (min-width: 768px) {
      .title { font-size: 32px; }
    }
    
    .subtitle {
      font-size: 16px;
      color: var(--muted);
      line-height: 1.5;
      margin: 0;
    }
    
    @media (min-width: 640px) {
      .subtitle { font-size: 18px; }
    }
    
    .hero-bg {
      position: absolute;
      inset: 0;
      z-index: -1;
      background: radial-gradient(800px 400px at 10% 0%, rgba(44,161,109,.35), rgba(44,161,109,0) 70%),
                  radial-gradient(800px 400px at 100% 100%, rgba(226,154,46,.2), rgba(226,154,46,0) 70%);
    }
    
    .hero-actions {
      display: flex;
      gap: 12px;
      justify-content: center;
      margin-top: 24px;
      flex-wrap: wrap;
    }
    
    .hero-image {
      margin-top: 32px;
      text-align: center;
    }
    
    .hero-image img {
      max-width: 100%;
      width: 100%;
      max-width: 720px;
      border: 1px solid var(--border);
      border-radius: 16px;
      box-shadow: 0 8px 32px rgba(0,0,0,.12);
    }
    
    ul.clean { list-style: none; margin: 0; padding: 0; }
    ul.disc { list-style: disc; margin: 0; padding-left: 20px; }
    
    hr {
      border: 0;
      border-top: 1px solid var(--border);
      margin: 16px 0;
    }
    
    .pricing .price {
      font-size: 24px;
      font-weight: 800;
    }
    
    @media (min-width: 640px) {
      .pricing .price { font-size: 28px; }
    }
    
    .pricing .price span {
      font-size: 14px;
      font-weight: 500;
      color: var(--muted);
    }
    
    .input, select, textarea {
      width: 100%;
      min-height: 44px;
      border-radius: 10px;
      border: 1px solid var(--border);
      background: #ffffff;
      color: var(--text);
      padding: 0 12px;
      font-size: 16px;
    }
    
    textarea {
      min-height: 100px;
      padding: 12px;
      resize: vertical;
    }
    
    label {
      font-size: 14px;
      color: var(--muted);
      font-weight: 500;
      display: block;
      margin-bottom: 4px;
    }
    
    .small { font-size: 12px; }
    
    @media (min-width: 640px) {
      .small { font-size: 14px; }
    }
    
    .sticky-cta {
      position: fixed;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 60;
      border-top: 1px solid var(--border);
      background: rgba(255,255,255,0.95);
      backdrop-filter: blur(8px);
      padding: 12px 0;
    }
    
    @media (min-width: 768px) {
      .sticky-cta { display: none; }
    }
    
    .floating-wa {
      position: fixed;
      right: 16px;
      bottom: 80px;
      height: 56px;
      width: 56px;
      border-radius: 50%;
      background: var(--primary);
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      border: 1px solid rgba(255,255,255,.15);
      box-shadow: 0 4px 12px rgba(44,161,109,0.3);
      z-index: 50;
    }
    
    @media (min-width: 768px) {
      .floating-wa { bottom: 20px; }
    }
    
    footer {
      border-top: 1px solid var(--border);
      background: linear-gradient(90deg, rgba(5,168,141,.06), rgba(226,154,46,.06), rgba(5,168,141,.06));
    }
    
    .footer-content {
      padding: 32px 0;
      display: grid;
      gap: 24px;
    }
    
    .footer-brand {
      display: flex;
      align-items: center;
      gap: 10px;
      font-weight: 800;
      font-size: 16px;
      margin-bottom: 12px;
    }
    
    .footer-links {
      display: grid;
      gap: 24px;
      grid-template-columns: 1fr;
    }
    
    @media (min-width: 640px) {
      .footer-links { grid-template-columns: repeat(3, 1fr); }
    }
    
    .footer-section h4 {
      font-weight: 600;
      margin-bottom: 8px;
      font-size: 14px;
    }
    
    .footer-section ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }
    
    .footer-section ul li {
      margin-bottom: 6px;
    }
    
    .footer-section a {
      color: var(--muted);
      font-size: 14px;
    }
    
    .footer-bottom {
      border-top: 1px solid var(--border);
      padding: 16px 0;
      text-align: center;
      font-size: 12px;
      color: var(--muted);
    }
    
    .video-container {
      position: relative;
      width: 100%;
      padding-bottom: 56.25%;
      height: 0;
      border-radius: 16px;
      overflow: hidden;
    }
    
    .video-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0;
    }
    
    /* Animation for prototype */
    @keyframes slideIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    /* Mobile-first responsive adjustments */
    @media (max-width: 639px) {
      .hero-actions { flex-direction: column; }
      .btn { width: 100%; max-width: 300px; }
      .grid-2 .card:nth-child(2n+1) { order: 1; }
      .pricing .grid { gap: 12px; }
      .sticky-cta .container { padding: 0 16px; }
      section { padding: 32px 0; }
    }
    
    /* Hide elements that should only show on desktop */
    .desktop-only { display: none; }
    @media (min-width: 768px) {
      .desktop-only { display: block; }
    }
    
    .mobile-only { display: block; }
    @media (min-width: 768px) {
      .mobile-only { display: none; }
    }
  </style>
</head>
<body>
  <header>
    <div class="container">
      <div class="header-content">
        <a href="#top" class="logo-container">
          <img class="logo-img" src="https://cdn.builder.io/api/v1/image/assets%2F336c395e37d24bd6b06ff4e1563eb479%2F77a75836487f4f1284694051be15d074" alt="Grekam Visuals Logo" />
          <span class="small" style="position:absolute;clip:rect(0,0,0,0);height:1px;width:1px;white-space:nowrap;overflow:hidden">Home</span>
        </a>
        
        <nav class="desktop-only">
          <a href="#features">Features</a>
          <a href="#roi">ROI</a>
          <a href="#use-cases">Use Cases</a>
          <a href="#pricing">Solution</a>
          <a href="#faq">FAQ</a>
          <a href="#why-grekam">Why Grekam</a>
        </nav>
        
        <div class="header-actions">
          <a class="btn secondary" href="https://www.grekam.in" target="_blank" rel="noreferrer">Go to Academy</a>
        </div>
      </div>
    </div>
  </header>

  <main id="top">
    <section style="position:relative;overflow:hidden">
      <div class="hero-bg"></div>
      <div class="container center">
        <span class="badge">
          <svg aria-hidden viewBox="0 0 24 24" fill="currentColor" style="height:14px;width:14px;color:var(--primary);vertical-align:-2px;margin-right:6px">
            <path d="M12 2.25c.8 0 1.58.32 2.15.9l.87.86.87-.86A3.04 3.04 0 0 1 18.99 2.3a3.1 3.1 0 0 1 3.1 3.1c0 .8-.32 1.58-.9 2.15l-.86.87.86.87c.58.57.9 1.36.9 2.15a3.1 3.1 0 0 1-3.1 3.1c-.8 0-1.58-.32-2.15-.9l-.87-.86-.87.86a3.04 3.04 0 0 1-2.97.85 3.1 3.1 0 0 1-3.1-3.1c0-.8.32-1.58.9-2.15l.86-.87-.86-.87a3.04 3.04 0 0 1-.85-2.97 3.1 3.1 0 0 1 3.1-3.1zm-1.1 10.06 4.72-4.72 1.06 1.06-5.78 5.78-2.3-2.3 1.06-1.06 1.24 1.24z"/>
          </svg>
          Meta-Verified BSP
        </span>
        
        <h1 class="title" style="margin-top:16px">Scale Your Business with Official WhatsApp Business API</h1>
        <p class="subtitle" style="margin-top:12px">Meta-Verified Platform | Boost Sales by 200% | Automated Customer Engagement</p>
        
        <div class="hero-actions">
          <a class="btn" href="https://wabot.grekam.in/auth/login">Start Free Trial</a>
          <a class="btn secondary" href="https://wabot.grekam.in/auth/login">Get a Live Demo</a>
        </div>
        
        <div class="hero-image">
          <img src="{{ asset('imgs/outer-home/hero.jpg') }}" alt="WhatsApp Business API Interface" />
        </div>
      </div>
    </section>

    <section id="trust">
      <div class="container">
        <div class="card card-pad center">
          <h2 class="title" style="font-size:20px">Meta Partnership Trust</h2>
          <p class="subtitle" style="max-width:680px;margin:12px auto 0">Boost confidence with our Meta-Verified BSP status — better uptime, security, and early access to features.</p>
          
          <div class="grid grid-4" style="margin-top:24px">
            <div class="card card-pad">
              <img src="https://via.placeholder.com/32x32/2CA16D/ffffff?text=M" alt="Meta Partnership Icon" style="height:32px;width:32px"/>
              <div style="font-weight:600;margin-top:8px">Direct Meta Partnership</div>
              <div class="small muted">Built and certified with Meta.</div>
            </div>
            <div class="card card-pad">
              <img src="https://via.placeholder.com/32x32/2CA16D/ffffff?text=S" alt="Security Icon" style="height:32px;width:32px"/>
              <div style="font-weight:600;margin-top:8px">Compliance & Security</div>
              <div class="small muted">SOC2-ready infrastructure.</div>
            </div>
            <div class="card card-pad">
              <img src="https://via.placeholder.com/32x32/2CA16D/ffffff?text=✓" alt="Verification Icon" style="height:32px;width:32px"/>
              <div style="font-weight:600;margin-top:8px">Official Green Tick</div>
              <div class="small muted">Verified brand presence.</div>
            </div>
            <div class="card card-pad">
              <img src="https://via.placeholder.com/32x32/2CA16D/ffffff?text=P" alt="Priority Support Icon" style="height:32px;width:32px"/>
              <div style="font-weight:600;margin-top:8px">Priority Meta Support</div>
              <div class="small muted">Faster resolutions & feature access.</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="tech" style="background:#3B8D6A;color:#fff">
      <div class="container">
        <div class="center" style="margin-bottom:32px">
          <p class="subtitle" style="color:#fff;opacity:.9">Tech Empowerment</p>
          <h2 class="title" style="font-size:20px;color:#fff">Features that make WhatsApp Marketing easier</h2>
        </div>
        
        <div class="grid grid-4">
          <div class="card card-pad" style="background:rgba(255,255,255,0.1);border-color:rgba(255,255,255,0.2);color:#fff">
            <strong>Embedded Signup</strong>
            <div class="small" style="margin-top:8px;opacity:.9">Onboard customers with ease with our integrated Embedded Signup system.</div>
          </div>
          <div class="card card-pad" style="background:rgba(255,255,255,0.1);border-color:rgba(255,255,255,0.2);color:#fff">
            <strong>Template Management</strong>
            <div class="small" style="margin-top:8px;opacity:.9">Handle templates directly within the application without visiting Meta.</div>
          </div>
          <div class="card card-pad" style="background:rgba(255,255,255,0.1);border-color:rgba(255,255,255,0.2);color:#fff">
            <strong>Multiple Phone Numbers</strong>
            <div class="small" style="margin-top:8px;opacity:.9">Supports multiple phone numbers for the same WhatsApp Business Account.</div>
          </div>
          <div class="card card-pad" style="background:rgba(255,255,255,0.1);border-color:rgba(255,255,255,0.2);color:#fff">
            <strong>WhatsApp Chat</strong>
            <div class="small" style="margin-top:8px;opacity:.9">Grekam Visuals chat replicates the native WhatsApp interface.</div>
          </div>
          <div class="card card-pad" style="background:rgba(255,255,255,0.1);border-color:rgba(255,255,255,0.2);color:#fff">
            <strong>Bot Replies / Chat Bot</strong>
            <div class="small" style="margin-top:8px;opacity:.9">Automate responses and engage customers 24/7.</div>
          </div>
          <div class="card card-pad" style="background:rgba(255,255,255,0.1);border-color:rgba(255,255,255,0.2);color:#fff">
            <strong>APIs to connect</strong>
            <div class="small" style="margin-top:8px;opacity:.9">Seamless integrations and data sharing.</div>
          </div>
          <div class="card card-pad" style="background:rgba(255,255,255,0.1);border-color:rgba(255,255,255,0.2);color:#fff">
            <strong>Custom Fields</strong>
            <div class="small" style="margin-top:8px;opacity:.9">Personalize messages with user data.</div>
          </div>
          <div class="card card-pad" style="background:rgba(255,255,255,0.1);border-color:rgba(255,255,255,0.2);color:#fff">
            <strong>Team Members / Agent</strong>
            <div class="small" style="margin-top:8px;opacity:.9">Invite team members, assign roles, and collaborate.</div>
          </div>
        </div>
      </div>
    </section>

    <section id="features">
      <div class="container grid grid-2">
        <div class="card card-pad">
          <h3 class="title" style="font-size:18px">The Problem</h3>
          <p class="muted" style="margin-top:8px">Email open rates are low, response time is slow, support is broken.</p>
          <ul class="disc" style="margin-top:16px">
            <li>Emails get ignored — low engagement and conversions</li>
            <li>Delayed responses mean lost revenue and poor CSAT</li>
            <li>Fragmented tools and manual workflows</li>
          </ul>
        </div>
        <div class="card card-pad">
          <h3 class="title" style="font-size:18px">The Solution</h3>
          <p class="muted" style="margin-top:8px">WhatsApp API → 98% open rate, 24/7 automation, instant engagement.</p>
          <ul class="disc" style="margin-top:16px">
            <li>Reach customers where they already are — WhatsApp</li>
            <li>Automate FAQs, order updates, and lead nurturing</li>
            <li>Real-time conversations that convert 5x better than email</li>
          </ul>
        </div>
      </div>
    </section>

    <section id="stats">
      <div class="container">
        <div class="grid grid-4">
          <div class="card card-pad center" style="background:rgba(0,0,0,0.02)">
            <div class="title" style="font-size:24px;color:var(--primary)">98%</div>
            <div class="muted small">Open Rate</div>
          </div>
          <div class="card card-pad center" style="background:rgba(0,0,0,0.02)">
            <div class="title" style="font-size:24px;color:var(--primary)">95%</div>
            <div class="muted small">Faster Response</div>
          </div>
          <div class="card card-pad center" style="background:rgba(0,0,0,0.02)">
            <div class="title" style="font-size:24px;color:var(--primary)">5x</div>
            <div class="muted small">More Engagement</div>
          </div>
          <div class="card card-pad center" style="background:rgba(0,0,0,0.02)">
            <div class="title" style="font-size:24px;color:var(--primary)">45%</div>
            <div class="muted small">Higher AOV</div>
          </div>
        </div>
      </div>
    </section>
 <!-- Meta Guide -->
    
    <section id="roi">
      <div class="container">
        <div class="card">
          <div class="card-pad">
            <h3 class="title" style="font-size:20px">ROI Calculator</h3>
          </div>
          <div class="card-pad grid grid-2" style="align-items:start">
            <div class="grid">
              <div>
                <label>Monthly leads or contacts</label>
                <input class="input" id="roi_leads" type="number" min="0" value="5000" />
              </div>
              <div>
                <label>Average order value (₹)</label>
                <input class="input" id="roi_aov" type="number" min="0" value="1500" />
              </div>
              <div>
                <label>Conversion rate of engaged (%)</label>
                <input class="input" id="roi_conv" type="number" min="0" max="100" value="10" />
              </div>
              <button class="btn" id="roi_btn">Calculate ROI</button>
            </div>
            <div class="card card-pad">
              <div class="grid" style="grid-template-columns:1fr auto;gap:12px">
                <div class="muted small">Email engaged</div>
                <div id="roi_email" style="text-align:right;font-weight:600">1,000</div>
                <div class="muted small">WhatsApp engaged</div>
                <div id="roi_wa" style="text-align:right;font-weight:600">4,900</div>
                <div class="muted small">Extra orders</div>
                <div id="roi_orders" style="text-align:right;font-weight:600">390</div>
                <div class="muted small">Projected revenue lift</div>
                <div id="roi_revenue" style="text-align:right;color:var(--primary);font-weight:800">₹585,000</div>
              </div>
              <div class="small muted" style="margin-top:12px">
                Assumptions: 98% WA open rate vs 20% email; conversion applied to engaged contacts.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="use-cases" style="background:var(--primary);color:#fff">
      <div class="container">
        <div class="card" style="background:rgba(255,255,255,0.12);border-color:rgba(255,255,255,0.22);color:#fff">
          <div class="card-pad">
            <h3 class="title" style="font-size:20px">Industry Use Cases</h3>
          </div>
          <div class="card-pad grid grid-2" style="align-items:start">
            <div>
              <label>Select industry</label>
              <select id="ind_sel" class="input">
                <option value="ecommerce">E-commerce</option>
                <option value="healthcare">Healthcare</option>
                <option value="education">Education</option>
                <option value="realestate">Real Estate</option>
                <option value="restaurant">Restaurant</option>
                <option value="finance">Finance</option>
                <option value="automotive">Automotive</option>
              </select>
              <div class="small muted" style="margin-top:12px">
                On select, we tailor the benefits and key features for your industry.
              </div>
            </div>
            <div class="card card-pad" id="ind_card" style="background:rgba(255,255,255,0.08);border-color:rgba(255,255,255,0.22);color:#fff">
              <div id="ind_roi" style="color:var(--secondary);font-weight:600">+250% Sales</div>
              <ul id="ind_bullets" class="disc" style="margin-top:12px"></ul>
              <div id="ind_feats" class="small muted" style="margin-top:12px"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="gallery">
      <div class="container center">
        <h2 class="title" style="font-size:20px">Product Gallery</h2>
        <p class="subtitle" style="margin-top:8px">API references, WhatsApp chat previews, and more.</p>
        <div class="grid grid-4" style="margin-top:24px">
          <div class="card">
            <img src="{{ asset('imgs/outer-home/card1.jpg') }}"  alt="API Documentation" style="width:100%;aspect-ratio:16/9;object-fit:cover"/>
            <div class="card-pad" style="font-weight:600">API Docs</div>
          </div>
          <div class="card">
            <img src="{{ asset('imgs/outer-home/card2.jpg') }}" alt="WhatsApp Chat UI" style="width:100%;aspect-ratio:16/9;object-fit:cover"/>
            <div class="card-pad" style="font-weight:600">WhatsApp Chat UI</div>
          </div>
          <div class="card">
            <img src="{{ asset('imgs/outer-home/card3.jpg') }}" alt="Flows & Automation" style="width:100%;aspect-ratio:16/9;object-fit:cover"/>
            <div class="card-pad" style="font-weight:600">Flows & Automation</div>
          </div>
          <div class="card">
            <img src="{{ asset('imgs/outer-home/card4.jpg') }}" alt="Broadcasts & Templates" style="width:100%;aspect-ratio:16/9;object-fit:cover"/>
            <div class="card-pad" style="font-weight:600">Broadcasts & Templates</div>
          </div>
        </div>
      </div>
    </section>

    <section id="automation">
      <div class="container center">
        <h2 class="title" style="font-size:20px">Automation Flow & Benefits</h2>
        <p class="subtitle" style="margin-top:8px">From opt-in to conversion — scalable flows that save time and lift revenue.</p>
        
        <div class="grid grid-5" style="margin-top:24px">
          <div class="card card-pad" style="position:relative">
            <div class="small muted">Step 1</div>
            <div style="font-weight:600">Lead Captured</div>
            <div class="small">Forms / Ads / API</div>
          </div>
          <div class="card card-pad" style="position:relative">
            <div class="small muted">Step 2</div>
            <div style="font-weight:600">WhatsApp Opt-in</div>
            <div class="small">Embedded signup & policies</div>
          </div>
          <div class="card card-pad" style="position:relative">
            <div class="small muted">Step 3</div>
            <div style="font-weight:600">Bot & Routing</div>
            <div class="small">Smart replies + agent handoff</div>
          </div>
          <div class="card card-pad" style="position:relative">
            <div class="small muted">Step 4</div>
            <div style="font-weight:600">CRM & Orders</div>
            <div class="small">APIs push data to systems</div>
          </div>
          <div class="card card-pad" style="position:relative">
            <div class="small muted">Step 5</div>
            <div style="font-weight:600">Follow-ups</div>
            <div class="small">Broadcasts, reminders, NPS</div>
          </div>
        </div>
        
        <ul class="clean center" style="margin-top:24px;display:grid;gap:8px;max-width:600px;margin-left:auto;margin-right:auto">
          <li class="muted">• 95% faster response time with automation and routing</li>
          <li class="muted">• 5x engagement vs email with conversational messaging</li>
          <li class="muted">• Unified data via APIs to CRM, OMS, and analytics</li>
        </ul>
      </div>
    </section>

    <section id="how-it-works">
      <div class="container center">
        <h2 class="title" style="font-size:20px">How It Works</h2>
        <div class="grid grid-4" style="margin-top:24px">
          <div class="card card-pad">
            <div class="small muted">Step 1</div>
            <div style="font-weight:600">Day 1–2</div>
            <div class="small">Setup & Verification</div>
          </div>
          <div class="card card-pad">
            <div class="small muted">Step 2</div>
            <div style="font-weight:600">Day 3–5</div>
            <div class="small">Platform Training</div>
          </div>
          <div class="card card-pad">
            <div class="small muted">Step 3</div>
            <div style="font-weight:600">Day 6–10</div>
            <div class="small">Chatbot & Integration</div>
          </div>
          <div class="card card-pad">
            <div class="small muted">Step 4</div>
            <div style="font-weight:600">Day 11–14</div>
            <div class="small">Full Launch & Optimization</div>
          </div>
        </div>
      </div>
    </section>

    <section id="prototype">
      <div class="container">
        <h2 class="title center" style="font-size:20px">Interactive WhatsApp API Prototype – FashionHub</h2>
        <p class="subtitle center" style="margin-top:8px">Flows trigger automatically, analytics update in real time, no human support needed.</p>
        
        <div class="grid grid-2" style="margin-top:24px">
          <!-- Left: Dashboard -->
          <div class="card card-pad" style="background:linear-gradient(135deg, rgba(255,255,255,.9), rgba(255,255,255,.7));border-color:rgba(44,161,109,.2)">
            <div style="display:flex;align-items:center;justify-content:space-between;gap:12px;flex-wrap:wrap">
              <div style="font-weight:600;color:var(--primary)">WhatsApp API Dashboard – FashionHub</div>
              <button id="proto_restart" class="btn secondary" style="padding:6px 12px;font-size:12px">Restart Demo</button>
            </div>
            
            <div style="margin-top:16px">
              <div class="small" style="font-weight:600;margin-bottom:8px">Automation Flow</div>
              <ul id="proto_flow" class="clean" style="display:grid;gap:8px">
                <li data-step="welcome" class="card" style="padding:8px 12px;font-size:12px">Welcome Message</li>
                <li data-step="buttons" class="card" style="padding:8px 12px;font-size:12px">Action Buttons: View Products / Check Offers / Track Order</li>
                <li data-step="category" class="card" style="padding:8px 12px;font-size:12px">Category Selection → Product Display</li>
                <li data-step="buy" class="card" style="padding:8px 12px;font-size:12px">Purchase Flow</li>
              </ul>
            </div>
            
            <div style="margin-top:20px">
              <div class="small" style="font-weight:600;margin-bottom:8px">Analytics (Live Updates)</div>
              <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(80px,1fr));gap:8px">
                <div class="card" style="padding:8px;text-align:center;background:rgba(255,255,255,.8)">
                  <div class="small muted">Sent</div>
                  <div id="p_sent" style="font-weight:800;font-size:16px;color:var(--primary)">0</div>
                </div>
                <div class="card" style="padding:8px;text-align:center;background:rgba(255,255,255,.8)">
                  <div class="small muted">Delivered</div>
                  <div id="p_delivered" style="font-weight:800;font-size:16px;color:var(--primary)">0</div>
                </div>
                <div class="card" style="padding:8px;text-align:center;background:rgba(255,255,255,.8)">
                  <div class="small muted">Read</div>
                  <div id="p_read" style="font-weight:800;font-size:16px;color:var(--primary)">0</div>
                </div>
                <div class="card" style="padding:8px;text-align:center;background:rgba(255,255,255,.8)">
                  <div class="small muted">Clicks</div>
                  <div id="p_clicks" style="font-weight:800;font-size:16px;color:var(--primary)">0</div>
                </div>
                <div class="card" style="padding:8px;text-align:center;background:rgba(255,255,255,.8)">
                  <div class="small muted">Orders</div>
                  <div id="p_orders" style="font-weight:800;font-size:16px;color:var(--primary)">0</div>
                </div>
              </div>
              <div class="small muted" style="margin-top:12px;font-size:11px">
                CTR: <span id="p_ctr">0</span>% | Conversion Rate: <span id="p_conv">0</span>%
              </div>
            </div>
          </div>
          
          <!-- Right: Mobile chat -->
          <div class="card" style="border-radius:24px;overflow:hidden;box-shadow:0 8px 32px rgba(44,161,109,.15);max-height:600px">
            <div style="background:#075E54;color:#fff;padding:12px 16px;display:flex;align-items:center;gap:8px">
              <div style="width:8px;height:8px;border-radius:50%;background:#25D366"></div>
              <div>
                <div style="font-weight:600;font-size:14px">FashionHub</div>
                <div style="font-size:11px;opacity:.8">Business Account • Online</div>
              </div>
            </div>
            <div id="proto_chat" style="height:500px;overflow-y:auto;background:#e5ddd5;background-image:url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\"><circle cx=\"20\" cy=\"20\" r=\"0.5\" fill=\"%23000\" opacity=\"0.1\"/><circle cx=\"80\" cy=\"80\" r=\"0.5\" fill=\"%23000\" opacity=\"0.1\"/></svg>');padding:12px"></div>
          </div>
        </div>
      </div>
    </section>

    <section id="video">
      <div class="container center">
        <h2 class="title" style="font-size:20px">Product Walkthrough</h2>
        <p class="subtitle" style="margin-top:8px">See how to launch, automate, and scale on WhatsApp in minutes.</p>
        
        <div class="card" style="max-width:900px;margin:24px auto 0">
          <div class="card-pad" style="padding:0">
            <div class="video-container">
              <iframe 
                src="https://www.youtube.com/embed/t-M4y7sYZcs?list=PLb0IAmt7-GS3L3D9SbCWsgAYXVzA6oeXL" 
                title="WhatsApp Business API Product Walkthrough" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                allowfullscreen>
              </iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="pricing" class="pricing">
      <div class="container center">
        <div class="badge" style="color:var(--primary);border-color:rgba(44,161,109,.4);margin-bottom:16px">Our Solution</div>
        <h1 class="title" style="margin-bottom:8px">Simple, Transparent Pricing</h1>
        <p class="subtitle">Choose the plan that fits your business needs</p>
        
        <div class="grid grid-3" style="margin-top:32px">
          <div class="card card-pad">
            <h4 style="margin:0 0 8px;font-size:16px">Free Plan</h4>
            <hr />
            <div>
              <div class="price">₹0 <span>/ month</span></div>
            </div>
            <div class="small muted" style="margin-top:8px">
              <a href="https://business.whatsapp.com/products/platform-pricing" target="_blank" rel="noreferrer">+ WhatsApp Messaging Charges</a>
            </div>
            <hr />
            <ul class="clean" style="text-align:left;font-size:14px">
              <li><strong>200</strong> Conversations / month</li>
              <li><strong>20</strong> Template messages</li>
              <li>✕ Chatbot & auto-replies</li>
              <li><strong>1</strong> Team member</li>
              <li>✕ Multiple phone numbers</li>
            </ul>
            <div style="margin-top:16px">
              <a class="btn block" href="https://wabot.grekam.in/auth/login">Get Started Free</a>
            </div>
          </div>
          
          <div class="card card-pad" style="position:relative;border:2px solid var(--primary);transform:scale(1.02)">
            <div style="position:absolute;left:50%;transform:translateX(-50%);top:-12px;background:var(--primary);color:#fff;font-size:12px;padding:4px 12px;border-radius:12px;font-weight:600">Most Popular</div>
            <h4 style="margin:0 0 8px;font-size:16px">Starter</h4>
            <hr />
            <div>
              <div class="price">₹599 <span>/ month</span></div>
              <div style="height:4px"></div>
              <div class="price" style="font-size:18px">₹5,999 <span>/ year</span></div>
            </div>
            <div class="small muted" style="margin-top:8px">
              <a href="https://business.whatsapp.com/products/platform-pricing" target="_blank" rel="noreferrer">+ WhatsApp Messaging Charges</a>
            </div>
            <hr />
            <ul class="clean" style="text-align:left;font-size:14px">
              <li><strong>1,000</strong> Conversations / month</li>
              <li><strong>200</strong> Template messages</li>
              <li>✓ Chatbot & auto-replies</li>
              <li><strong>3</strong> Team members</li>
              <li>✓ Multiple phone numbers</li>
            </ul>
            <div style="margin-top:16px">
              <a class="btn block" href="https://wabot.grekam.in/auth/login">Start 14-Day Trial</a>
            </div>
          </div>
          
          <div class="card card-pad">
            <h4 style="margin:0 0 8px;font-size:16px">Professional</h4>
            <hr />
            <div>
              <div class="price">₹999 <span>/ month</span></div>
              <div style="height:4px"></div>
              <div class="price" style="font-size:18px">₹9,999 <span>/ year</span></div>
            </div>
            <div class="small muted" style="margin-top:8px">
              <a href="https://business.whatsapp.com/products/platform-pricing" target="_blank" rel="noreferrer">+ WhatsApp Messaging Charges</a>
            </div>
            <hr />
            <ul class="clean" style="text-align:left;font-size:14px">
              <li><strong>Unlimited</strong> Conversations</li>
              <li><strong>Unlimited</strong> Templates</li>
              <li>✓ Advanced chatbot features</li>
              <li><strong>10</strong> Team members</li>
              <li>✓ Priority support</li>
            </ul>
            <div style="margin-top:16px">
              <a class="btn block" href="https://wabot.grekam.in/auth/login">Start 14-Day Trial</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="lifetime">
      <div class="container center">
        <h2 class="title" style="font-size:20px">Lifetime Access</h2>
        <div class="card card-pad" style="max-width:600px;margin:16px auto 0;text-align:center">
          <div class="price" style="color:var(--primary)">₹29,999 <span>one-time payment</span></div>
          <div class="small muted" style="margin-top:8px">
            <a href="https://business.whatsapp.com/products/platform-pricing" target="_blank" rel="noreferrer">+ WhatsApp Messaging Charges</a>
          </div>
          <hr />
          <ul class="clean" style="text-align:left">
            <li>✓ All Professional features included</li>
            <li>✓ Lifetime access with updates</li>
            <li>✓ Priority onboarding & support</li>
            <li>✓ No recurring subscription fees</li>
            <li>✓ Advanced integrations & APIs</li>
          </ul>
          <div style="margin-top:16px">
            <a class="btn block" href="https://wabot.grekam.in/auth/login">Get Lifetime Access</a>
          </div>
        </div>
      </div>
    </section>

    <section style="background:rgba(44,161,109,0.05)">
      <div class="container">
        <div class="grid grid-3">
          <div class="card card-pad center">
            <div style="font-size:32px;margin-bottom:8px">💸</div>
            <div style="font-weight:600">30-Day Money-Back Guarantee</div>
            <div class="small muted" style="margin-top:4px">Risk-free trial period</div>
          </div>
          <div class="card card-pad center">
            <div style="font-size:32px;margin-bottom:8px">🔬</div>
            <div style="font-weight:600">14-Day Free Trial</div>
            <div class="small muted" style="margin-top:4px">No credit card required</div>
          </div>
          <div class="card card-pad center">
            <div style="font-size:32px;margin-bottom:8px">🔓</div>
            <div style="font-weight:600">No Lock-In Contract</div>
            <div class="small muted" style="margin-top:4px">Cancel anytime</div>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials">
      <div class="container center">
        <h2 class="title" style="font-size:20px">What Our Customers Say</h2>
        <div class="grid grid-3" style="margin-top:24px">
          <div class="card card-pad">
            <p style="font-size:16px;font-style:italic">"We recovered 35% more abandoned carts within the first 30 days of implementation."</p>
            <div class="small muted" style="margin-top:12px;font-weight:600">— Luma Shop, E-commerce</div>
          </div>
          <div class="card card-pad">
            <p style="font-size:16px;font-style:italic">"Response times dropped by 95%. Our customers absolutely love the WhatsApp experience."</p>
            <div class="small muted" style="margin-top:12px;font-weight:600">— QuickCare, Healthcare</div>
          </div>
          <div class="card card-pad">
            <p style="font-size:16px;font-style:italic">"5x more engagement compared to email campaigns. Revenue increased by 42% in Q1."</p>
            <div class="small muted" style="margin-top:12px;font-weight:600">— EduGrow, Education</div>
          </div>
        </div>
      </div>
    </section>

    <section id="why-grekam">
      <div class="container">
        <div class="card card-pad center">
          <h2 class="title" style="font-size:20px">Why Choose Grekam Visuals?</h2>
          <p class="subtitle" style="max-width:720px;margin:12px auto 0">
            We're a customer-obsessed team focused on building reliable, conversion-driven WhatsApp experiences. 
            Modern technology combined with hands-on support helps you launch fast and scale confidently.
          </p>
          
          <div class="grid grid-3" style="margin-top:24px">
            <div class="card card-pad">
              <div style="font-weight:600;margin-bottom:8px">Expert Team</div>
              <div class="small muted">Seasoned engineers and success managers who understand messaging at scale.</div>
            </div>
            <div class="card card-pad">
              <div style="font-weight:600;margin-bottom:8px">Dedicated Support</div>
              <div class="small muted">Swift SLAs, comprehensive onboarding guidance, and proactive check-ins.</div>
            </div>
            <div class="card card-pad">
              <div style="font-weight:600;margin-bottom:8px">Proven Results</div>
              <div class="small muted">Focus on measurable improvements in engagement, response time, and revenue.</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="faq">
      <div class="container center">
        <h2 class="title" style="font-size:20px">Frequently Asked Questions</h2>
        <div class="card card-pad" style="margin-top:24px;max-width:800px;margin-left:auto;margin-right:auto;text-align:left">
          <details style="margin-bottom:16px">
            <summary style="font-weight:600;cursor:pointer;padding:8px 0">What is the WhatsApp Business API?</summary>
            <div class="small muted" style="margin-top:8px;padding-left:16px">
              The WhatsApp Business API enables businesses to integrate WhatsApp messaging into their workflows for customer communication, automation, and support at scale.
            </div>
          </details>
          <hr />
          <details style="margin-bottom:16px">
            <summary style="font-weight:600;cursor:pointer;padding:8px 0">Do I get the official green tick verification?</summary>
            <div class="small muted" style="margin-top:8px;padding-left:16px">
              Verification depends on Meta's criteria and approval process. We guide you through the requirements and help improve your chances of approval.
            </div>
          </details>
          <hr />
          <details style="margin-bottom:16px">
            <summary style="font-weight:600;cursor:pointer;padding:8px 0">Is the platform secure and compliant?</summary>
            <div class="small muted" style="margin-top:8px;padding-left:16px">
              Yes, absolutely. We follow Meta's policies and industry best practices for data protection, security, and compliance requirements.
            </div>
          </details>
          <hr />
          <details style="margin-bottom:16px">
            <summary style="font-weight:600;cursor:pointer;padding:8px 0">How are WhatsApp conversations billed?</summary>
            <div class="small muted" style="margin-top:8px;padding-left:16px">
              Meta charges per conversation based on category and region. Our plans include generous conversation bundles with transparent pricing for overages.
            </div>
          </details>
          <hr />
          <details>
            <summary style="font-weight:600;cursor:pointer;padding:8px 0">Can I cancel my subscription anytime?</summary>
            <div class="small muted" style="margin-top:8px;padding-left:16px">
              Absolutely. There are no lock-in contracts. You can upgrade, downgrade, or cancel your subscription at any time.
            </div>
          </details>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container center">
        <h2 class="title" style="font-size:20px">Get In Touch</h2>
        <p class="subtitle" style="margin-top:8px">Tell us about your needs and we'll reach out within 24 hours.</p>
        
        <div class="card card-pad" style="max-width:600px;margin:24px auto 0">
          <form action="https://wabot.grekam.in/auth/login" method="get">
            <div class="grid grid-2">
              <div>
                <label>Full Name</label>
                <input class="input" name="name" required />
              </div>
              <div>
                <label>Email Address</label>
                <input class="input" name="email" type="email" required />
              </div>
              <div>
                <label>Phone Number</label>
                <input class="input" name="phone" type="tel" />
              </div>
              <div>
                <label>Company Name</label>
                <input class="input" name="company" />
              </div>
              <div style="grid-column:1/-1">
                <label>How can we help you?</label>
                <textarea class="input" name="message" placeholder="Tell us about your business needs and goals..."></textarea>
              </div>
            </div>
            <div style="margin-top:16px;text-align:center">
              <button class="btn" type="submit">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </section>

    <section id="demo" style="background:var(--primary);color:#fff">
      <div class="container center">
        <div class="card card-pad" style="background:rgba(255,255,255,0.1);border-color:rgba(255,255,255,0.2);color:#fff">
          <h2 class="title" style="font-size:24px">Ready to Transform Your Customer Engagement?</h2>
          <p class="subtitle" style="color:rgba(255,255,255,0.9);margin-top:8px">
            Start your free trial today or book a personalized demo in just 60 seconds.
          </p>
          
          <div style="display:flex;gap:16px;justify-content:center;margin-top:20px;flex-wrap:wrap">
            <a class="btn" href="https://wabot.grekam.in/auth/login" style="background:#fff;color:var(--primary)">Start Free Trial</a>
            <a class="btn secondary" href="https://wabot.grekam.in/auth/login" style="border-color:rgba(255,255,255,0.3);color:#fff">Book Live Demo</a>
          </div>
          
          <div class="small" style="margin-top:12px;opacity:0.8">
            ✓ No credit card required  ✓ 14-day free trial  ✓ Setup in under 10 minutes
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Mobile Sticky CTA -->
  <div class="sticky-cta">
    <div class="container" style="display:flex;gap:8px;justify-content:center;flex-wrap:wrap">
      <a class="btn" href="https://wabot.grekam.in/auth/login" style="flex:1;max-width:150px">Start Trial</a>
      <a class="btn secondary" href="https://wabot.grekam.in/auth/login" style="flex:1;max-width:150px">Book Demo</a>
    </div>
  </div>

  <!-- Floating WhatsApp Button -->
  <a class="floating-wa" href="https://wa.me/919789359407" target="_blank" rel="noreferrer" aria-label="Contact us on WhatsApp">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
      <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004A9.87 9.87 0 015.321 18H2.38l.911-3.328A9.814 9.814 0 012 12.017C2.002 6.484 6.486 2 12.019 2s10.017 4.484 10.019 10.017c0 5.533-4.484 10.017-10.017 10.017m8.675-7.018c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347"/>
    </svg>
  </a>

  <footer>
    <div class="container">
      <div class="footer-content">
        <div>
          <div class="footer-brand">
            <img src="https://cdn.builder.io/api/v1/image/assets%2F336c395e37d24bd6b06ff4e1563eb479%2F77a75836487f4f1284694051be15d074" alt="Grekam Visuals Logo" style="height:40px;width:auto" />
            Grekam Visuals
          </div>
          <p class="small muted" style="margin-top:8px;max-width:300px">
            Official WhatsApp Business API platform to automate customer engagement and accelerate business growth.
          </p>
        </div>
        
        <div class="footer-links">
          <div class="footer-section">
            <h4>Company</h4>
            <ul>
              <li><a href="#pricing">Solutions</a></li>
              <li><a href="#faq">FAQ</a></li>
              <li><a href="https://wabot.grekam.in/auth/login">Live Demo</a></li>
              <li><a href="https://www.grekam.in" target="_blank" rel="noreferrer">Academy</a></li>
            </ul>
          </div>
          
          <div class="footer-section">
            <h4>Legal</h4>
            <ul>
              <li><a href="#">Terms of Service</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Data Protection</a></li>
            </ul>
          </div>
          
          <div class="footer-section">
            <h4>Contact</h4>
            <div style="display:grid;gap:8px">
              <div>
                <div class="small" style="font-weight:600;color:var(--text)">Email</div>
                <a href="mailto:support@grekam.in">support@grekam.in</a>
              </div>
              <div>
                <div class="small" style="font-weight:600;color:var(--text)">WhatsApp</div>
                <a href="https://wa.me/919789359407" target="_blank" rel="noreferrer">+91 97893 59407</a>
              </div>
              <div>
                <div class="small" style="font-weight:600;color:var(--text)">Location</div>
                <div class="small muted">Coimbatore, Tamil Nadu, India</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="footer-bottom">
        © <span id="year">2024</span> Grekam Visuals. All rights reserved.
      </div>
    </div>
  </footer>

  <script>
    // Set current year
    document.getElementById('year').textContent = new Date().getFullYear();
    
    // ROI Calculator
    const formatINR = (num) => new Intl.NumberFormat('en-IN', { 
      style: 'currency', 
      currency: 'INR' 
    }).format(+num);
    
    const calculateROI = () => {
      const leads = +document.getElementById('roi_leads').value || 0;
      const aov = +document.getElementById('roi_aov').value || 0;
      const conv = Math.min(100, Math.max(0, +document.getElementById('roi_conv').value || 0)) / 100;
      
      const emailOpenRate = 0.20;
      const whatsappOpenRate = 0.98;
      
      const engagedEmail = leads * emailOpenRate;
      const engagedWhatsApp = leads * whatsappOpenRate;
      const extraEngaged = Math.max(0, engagedWhatsApp - engagedEmail);
      const extraOrders = extraEngaged * conv;
      const revenueLift = extraOrders * aov;
      
      document.getElementById('roi_email').textContent = Math.round(engagedEmail).toLocaleString('en-IN');
      document.getElementById('roi_wa').textContent = Math.round(engagedWhatsApp).toLocaleString('en-IN');
      document.getElementById('roi_orders').textContent = Math.round(extraOrders).toLocaleString('en-IN');
      document.getElementById('roi_revenue').textContent = formatINR(Math.round(revenueLift));
    };
    
    document.getElementById('roi_btn').addEventListener('click', calculateROI);
    document.getElementById('roi_leads').addEventListener('input', calculateROI);
    document.getElementById('roi_aov').addEventListener('input', calculateROI);
    document.getElementById('roi_conv').addEventListener('input', calculateROI);
    calculateROI();

    // Industry Use Cases
    const INDUSTRIES = {
      ecommerce: {
        roi: '+250% Sales Growth',
        bullets: [
          'Recover abandoned carts via WhatsApp',
          'Automated order updates and COD confirmations',
          'Personalized product recommendations and upsells'
        ],
        features: ['Broadcasts', 'Cart Recovery', 'Product Catalog', 'Payment Integration']
      },
      healthcare: {
        roi: '+180% Patient Engagement',
        bullets: [
          'Automated appointment reminders',
          'Secure digital prescription delivery',
          '24/7 medical triage chatbot'
        ],
        features: ['Appointment Scheduling', 'Secure Messaging', 'Medical Chatbot', 'Patient Records']
      },
      education: {
        roi: '+210% Lead Conversions',
        bullets: [
          'Streamlined admissions process',
          'Real-time parent-teacher updates',
          'Course enrollment and promotions'
        ],
        features: ['Student Management', 'Parent Communication', 'Course Broadcasts', 'Fee Reminders']
      },
      realestate: {
        roi: '+230% Lead Response Rate',
        bullets: [
          'Instant property information sharing',
          'Automated site visit scheduling',
          'Personalized property recommendations'
        ],
        features: ['Property Catalog', 'Virtual Tours', 'Lead Scoring', 'Follow-up Automation']
      },
      restaurant: {
        roi: '+160% Repeat Orders',
        bullets: [
          'Direct ordering through WhatsApp',
          'Table reservation management',
          'Loyalty programs and special offers'
        ],
        features: ['Online Ordering', 'Table Booking', 'Menu Catalog', 'Loyalty Programs']
      },
      finance: {
        roi: '+140% Collection Rate',
        bullets: [
          'Secure KYC document collection',
          'Automated payment reminders',
          'Lead qualification and scoring'
        ],
        features: ['Document Collection', 'Payment Reminders', 'Secure Messaging', 'Compliance Tools']
      },
      automotive: {
        roi: '+190% Test Drive Bookings',
        bullets: [
          'Lead capture from advertisements',
          'Service appointment reminders',
          'Accessory and insurance upsells'
        ],
        features: ['Lead Management', 'Service Scheduling', 'Inventory Updates', 'Customer Support']
      }
    };

    const industrySelect = document.getElementById('ind_sel');
    const updateIndustryInfo = () => {
      const industry = industrySelect.value;
      const data = INDUSTRIES[industry];
      
      document.getElementById('ind_roi').textContent = data.roi;
      
      const bulletsList = document.getElementById('ind_bullets');
      bulletsList.innerHTML = data.bullets.map(bullet => `<li>${bullet}</li>`).join('');
      
      document.getElementById('ind_feats').textContent = 'Key features: ' + data.features.join(', ');
    };
    
    industrySelect.addEventListener('change', updateIndustryInfo);
    updateIndustryInfo();

    // Interactive WhatsApp Prototype
    (() => {
      const chatContainer = document.getElementById('proto_chat');
      const flowContainer = document.getElementById('proto_flow');
      const restartButton = document.getElementById('proto_restart');
      
      const stats = {
        sent: 0,
        delivered: 0,
        read: 0,
        clicks: 0,
        orders: 0
      };
      
      const updateStats = () => {
        document.getElementById('p_sent').textContent = stats.sent;
        document.getElementById('p_delivered').textContent = stats.delivered;
        document.getElementById('p_read').textContent = stats.read;
        document.getElementById('p_clicks').textContent = stats.clicks;
        document.getElementById('p_orders').textContent = stats.orders;
        
        const ctr = stats.sent ? Math.round((stats.clicks / stats.sent) * 100) : 0;
        const convRate = stats.clicks ? Math.round((stats.orders / stats.clicks) * 100) : 0;
        document.getElementById('p_ctr').textContent = ctr;
        document.getElementById('p_conv').textContent = convRate;
      };
      
      const highlightStep = (step) => {
        const steps = flowContainer.querySelectorAll('[data-step]');
        steps.forEach(stepEl => {
          if (stepEl.dataset.step === step) {
            stepEl.style.background = 'rgba(44,161,109,0.1)';
            stepEl.style.borderColor = 'var(--primary)';
          } else {
            stepEl.style.background = '#fff';
            stepEl.style.borderColor = 'var(--border)';
          }
        });
      };
      
      const scrollToBottom = () => {
        chatContainer.scrollTo({
          top: chatContainer.scrollHeight,
          behavior: 'smooth'
        });
      };
      
      const addMessage = (options) => {
        const { sender = 'bot', text, buttons, image, price } = options;
        
        const messageEl = document.createElement('div');
        messageEl.style.display = 'flex';
        messageEl.style.justifyContent = sender === 'bot' ? 'flex-start' : 'flex-end';
        messageEl.style.marginBottom = '8px';
        messageEl.style.animation = 'slideIn 0.3s ease-out';
        
        const bubbleEl = document.createElement('div');
        bubbleEl.style.maxWidth = '85%';
        bubbleEl.style.padding = '8px 12px';
        bubbleEl.style.borderRadius = '18px';
        bubbleEl.style.fontSize = '13px';
        bubbleEl.style.lineHeight = '1.4';
        bubbleEl.style.wordWrap = 'break-word';
        
        if (sender === 'bot') {
          bubbleEl.style.background = '#fff';
          bubbleEl.style.border = '1px solid #e0e0e0';
          bubbleEl.style.borderBottomLeftRadius = '4px';
        } else {
          bubbleEl.style.background = '#dcf8c6';
          bubbleEl.style.border = '1px solid #c8e6c9';
          bubbleEl.style.borderBottomRightRadius = '4px';
        }
        
        if (text) {
          const textEl = document.createElement('div');
          textEl.textContent = text;
          bubbleEl.appendChild(textEl);
        }
        
        if (image) {
          const imgEl = document.createElement('img');
          imgEl.src = image;
          imgEl.alt = 'Product';
          imgEl.style.width = '100%';
          imgEl.style.borderRadius = '8px';
          imgEl.style.marginTop = '4px';
          bubbleEl.appendChild(imgEl);
        }
        
        if (price) {
          const priceEl = document.createElement('div');
          priceEl.textContent = `Price: ${price}`;
          priceEl.style.fontSize = '11px';
          priceEl.style.color = '#666';
          priceEl.style.marginTop = '4px';
          bubbleEl.appendChild(priceEl);
        }
        
        if (buttons && buttons.length) {
          const buttonsEl = document.createElement('div');
          buttonsEl.style.marginTop = '8px';
          buttonsEl.style.display = 'flex';
          buttonsEl.style.flexDirection = 'column';
          buttonsEl.style.gap = '4px';
          
          buttons.forEach(button => {
            const btnEl = document.createElement('button');
            btnEl.textContent = button.label;
            btnEl.style.padding = '6px 12px';
            btnEl.style.border = '1px solid var(--primary)';
            btnEl.style.background = '#f0f9f0';
            btnEl.style.color = 'var(--primary)';
            btnEl.style.borderRadius = '12px';
            btnEl.style.fontSize = '11px';
            btnEl.style.cursor = 'pointer';
            btnEl.addEventListener('click', button.onClick);
            buttonsEl.appendChild(btnEl);
          });
          
          bubbleEl.appendChild(buttonsEl);
        }
        
        messageEl.appendChild(bubbleEl);
        chatContainer.appendChild(messageEl);
        scrollToBottom();
        
        return messageEl;
      };
      
      const sendBotMessage = (options) => {
        addMessage({ sender: 'bot', ...options });
        stats.sent++;
        updateStats();
        
        setTimeout(() => {
          stats.delivered++;
          updateStats();
        }, 500);
        
        setTimeout(() => {
          stats.read++;
          updateStats();
        }, 1200);
      };
      
      const sendUserMessage = (text) => {
        addMessage({ sender: 'user', text });
        stats.clicks++;
        updateStats();
      };
      
      const startDemo = () => {
        chatContainer.innerHTML = '';
        Object.keys(stats).forEach(key => stats[key] = 0);
        updateStats();
        highlightStep('welcome');
        
        sendBotMessage({
          text: 'Hi there! 👋 Welcome to FashionHub! How can we help you today?',
          buttons: [
            { label: '👗 View Products', onClick: () => viewProducts() },
            { label: '🎉 Check Offers', onClick: () => checkOffers() },
            { label: '📦 Track Order', onClick: () => trackOrder() }
          ]
        });
      };
      
      const viewProducts = () => {
        highlightStep('buttons');
        sendUserMessage('👗 View Products');
        
        setTimeout(() => {
          sendBotMessage({
            text: 'Great choice! Which category interests you?',
            buttons: [
              { label: "👔 Men's Wear", onClick: () => showCategory("Men's Wear", 'https://via.placeholder.com/200x150/2CA16D/ffffff?text=Denim+Jacket', '₹2,499') },
              { label: "👚 Women's Wear", onClick: () => showCategory("Women's Wear", 'https://via.placeholder.com/200x150/E29A2E/ffffff?text=Summer+Dress', '₹1,899') },
              { label: '👜 Accessories', onClick: () => showCategory('Accessories', 'https://via.placeholder.com/200x150/2CA16D/ffffff?text=Leather+Belt', '₹799') }
            ]
          });
        }, 800);
      };
      
      const checkOffers = () => {
        highlightStep('buttons');
        sendUserMessage('🎉 Check Offers');
        
        setTimeout(() => {
          sendBotMessage({
            text: '🎉 Amazing deals just for you!\n\n✨ 25% OFF on all Jackets - Use code: JACKET25\n🔥 Buy 2 Get 1 FREE on accessories\n💫 Free shipping on orders above ₹1,999'
          });
        }, 800);
      };
      
      const trackOrder = () => {
        highlightStep('buttons');
        sendUserMessage('📦 Track Order');
        
        setTimeout(() => {
          sendBotMessage({
            text: 'Please select your Order ID to track:',
            buttons: [
              { label: '#FH12345', onClick: () => showOrderStatus('#FH12345') },
              { label: '#FH98765', onClick: () => showOrderStatus('#FH98765') }
            ]
          });
        }, 800);
      };
      
      const showOrderStatus = (orderId) => {
        highlightStep('category');
        sendUserMessage(orderId);
        
        setTimeout(() => {
          sendBotMessage({
            text: `📦 Order ${orderId} Update:\n\n✅ Order Confirmed\n📦 Packed & Ready\n🚚 Out for Delivery\n\nExpected delivery: Today between 5-7 PM\n\nYou'll receive a call from our delivery partner shortly!`
          });
        }, 1000);
      };
      
      const showCategory = (category, image, price) => {
        highlightStep('category');
        sendUserMessage(category);
        
        setTimeout(() => {
          const productName = category === "Men's Wear" ? 'Premium Denim Jacket' : 
                            category === "Women's Wear" ? 'Elegant Summer Dress' : 
                            'Genuine Leather Belt';
          
          sendBotMessage({
            text: `Here's our bestseller in ${category}:`,
            image,
            buttons: [
              { label: '🛒 Buy Now', onClick: () => buyNow(productName, price) },
              { label: '💝 Add to Wishlist', onClick: () => addToWishlist(productName) }
            ]
          });
          
          setTimeout(() => {
            sendBotMessage({
              text: `${productName}\n${price}\n\n⭐ 4.8/5 Rating (2,840 reviews)\n🚚 Free Delivery\n↩️ Easy Returns`
            });
          }, 1500);
        }, 1000);
      };
      
      const buyNow = (product, price) => {
        highlightStep('buy');
        sendUserMessage('🛒 Buy Now');
        stats.orders++;
        updateStats();
        
        setTimeout(() => {
          sendBotMessage({
            text: `Perfect choice! 🎉\n\n${product} - ${price}\n\n📱 Complete your order here:\n👆 Tap the link below to checkout securely`,
            buttons: [
              { label: '💳 Checkout Now', onClick: () => checkout() }
            ]
          });
        }, 1000);
      };
      
      const addToWishlist = (product) => {
        sendUserMessage('💝 Add to Wishlist');
        
        setTimeout(() => {
          sendBotMessage({
            text: `💝 ${product} added to your wishlist!\n\nWe'll notify you about:\n• Price drops\n• Special offers\n• Back in stock alerts`
          });
        }, 800);
      };
      
      const checkout = () => {
        sendUserMessage('💳 Checkout Now');
        
        setTimeout(() => {
          sendBotMessage({
            text: '🎊 Thank you for your order!\n\nOrder #FH12346 confirmed\n💳 Payment successful\n📦 We\'ll send updates on WhatsApp\n\n🎁 You saved ₹200 with our WhatsApp exclusive offer!'
          });
        }, 1200);
      };
      
      if (restartButton) {
        restartButton.addEventListener('click', startDemo);
      }
      
      // Start the demo
      startDemo();
    })();
  </script>
</body>
</html>