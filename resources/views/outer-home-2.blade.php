<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href=src="{{ asset('imgs/outer-home/gwbot_fav.png') }}" type="image/png">
  <title>Grekam Wabot — WhatsApp API BSP</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
  <style>
    :root{
      --brand-whatsapp: 142 70% 49%;
      --brand-whatsapp-dark: 173 86% 20%;
      --brand-secondary: 36 76% 53%;
      --bg: 0 0% 100%;
      --fg: 222.2 84% 4.9%;
    }
    html{scroll-behavior:smooth}
    body{
      font-family:Inter,system-ui,-apple-system,"Segoe UI",Roboto,Ubuntu,"Helvetica Neue",Arial,"Noto Sans","Apple Color Emoji","Segoe UI Emoji";
      color:hsl(var(--fg));
      background:
        radial-gradient(40% 40% at 100% 0%, hsla(var(--brand-whatsapp)/.12) 0%, hsla(var(--brand-whatsapp)/0) 60%),
        radial-gradient(30% 30% at 0% 100%, hsla(var(--brand-whatsapp-dark)/.15) 0%, hsla(var(--brand-whatsapp-dark)/0) 60%);
      background-attachment:fixed
    }
    .glass{background:rgba(255,255,255,.6);backdrop-filter:blur(24px);-webkit-backdrop-filter:blur(24px);border:1px solid rgba(255,255,255,.4);box-shadow:0 10px 15px -3px rgb(0 0 0 / .08),0 4px 6px -4px rgb(0 0 0 / .06)}
    .btn-primary{background:hsl(var(--brand-whatsapp));color:#fff;border-radius:12px;padding:.75rem 1.25rem;font-weight:600;box-shadow:0 10px 15px -3px rgb(16 185 129 / .2),0 4px 6px -4px rgb(16 185 129 / .2)}
    .btn-secondary{background:hsl(var(--brand-secondary));color:#fff;border-radius:12px;padding:.75rem 1.25rem;font-weight:600}
    .btn-outline{background:#fff;color:hsl(var(--brand-whatsapp));border:1px solid hsl(var(--brand-whatsapp));border-radius:12px;padding:.6rem 1rem;font-weight:600}
    .doodle{background-image:radial-gradient(circle at 20px 20px, hsla(var(--brand-whatsapp-dark)/.08) 2px, transparent 2px),radial-gradient(circle at 60px 60px, hsla(var(--brand-whatsapp)/.08) 2px, transparent 2px);background-size:80px 80px}
    .reveal-up{opacity:0;transform:translateY(16px);transition:opacity .6s ease, transform .6s ease}
    .reveal-scale{opacity:0;transform:scale(.98);transition:opacity .6s ease, transform .6s ease}
    .reveal-fade{opacity:0;transition:opacity .6s ease}
    .is-visible{opacity:1;transform:none}
  </style>
</head>
<body class="bg-[hsl(var(--bg))]">
  <!-- Header -->
  <header class="sticky top-0 z-40 w-full">
    <div class="glass mx-auto max-w-7xl rounded-b-2xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between gap-4">
        <a href="#top" class="flex items-center gap-3" aria-label="Grekam Wabot Home">
          <div class="h-[44px] w-[124px] rounded-xl" style="background:url(https://cdn.builder.io/api/v1/image/assets%2Fcbde4876b28942a8a39d7ee6208db819%2Fcf1c401e99d540609d204b2e23781267) center/cover no-repeat"></div>
        </a>
        <nav class="hidden md:flex items-center gap-6 text-sm font-medium">
          <a href="#onboarding" class="opacity-80 hover:opacity-100">Onboarding</a>
          <a href="#guide" class="opacity-80 hover:opacity-100">Meta API Guide</a>
          <a href="#calculator" class="opacity-80 hover:opacity-100">Calculator</a>
          <a href="#pricing" class="opacity-80 hover:opacity-100">Pricing</a>
          <a href="#faq" class="opacity-80 hover:opacity-100">FAQ</a>
          <a href="#contact" class="opacity-80 hover:opacity-100">Contact</a>
        </nav>
        <div class="flex flex-wrap items-center gap-2">
          <a href="https://wabot.grekam.in/auth/register/vendor" target="_blank" class="btn-outline whitespace-nowrap">Register</a>
          <a href="https://wabot.grekam.in/auth/login" target="_self" class="btn-primary whitespace-nowrap">Login</a>
        </div>
      </div>
    </div>
  </header>

  <main id="top">
    <!-- Hero -->
    <section class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-12 md:pt-20">
      <div class="grid items-center gap-10 md:grid-cols-2">
        <div class="reveal-up">
          <div class="inline-flex items-center gap-2 rounded-full px-3 py-1 text-xs font-semibold text-[hsl(var(--brand-whatsapp))] ring-1 ring-[hsl(var(--brand-whatsapp))]/20 bg-[hsl(var(--brand-whatsapp))]/10">
            Meta Verified Tech-Partner | WhatsApp API BSP Service
          </div>
          <h1 class="mt-4 text-4xl font-normal tracking-tight sm:text-5xl">Automate. Scale. Grow. – With Grekam Wabot WhatsApp API</h1>
          <p class="mt-3 text-lg opacity-80">Business-ஐ 24/7 WhatsApp-ல run பண்ணும் time வந்துடுச்சு</p>
          <p class="mt-3 opacity-70">Reply instantly, sell automatically, and manage 1000s of customers – all inside WhatsApp.</p>
          <div class="mt-6 flex flex-wrap gap-3">
            <a href="https://wabot.grekam.in/auth/login" target="_self" class="btn-primary">Start Free Trial</a>
            <a href="https://wabot.grekam.in/auth/login" target="_blank" class="btn-secondary">Book a Demo</a>
          </div>
        </div>
        <div class="relative reveal-scale">
          <div class="absolute -inset-4 -z-10 blur-2xl" style="background:linear-gradient(45deg, rgba(37,211,102,.2), rgba(226,154,46,.2))"></div>
          <div class="glass rounded-2xl p-6" style="min-height:420px;max-width:578px;background:url(https://cdn.builder.io/api/v1/image/assets%2Fcbde4876b28942a8a39d7ee6208db819%2F1e1fd2a156254f91967be1e7d9b30601) center/cover no-repeat"></div>
        </div>
      </div>
    </section>

    <!-- Why -->
    <section id="how" class="mx-auto mt-20 max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="text-center reveal-up">
        <h2 class="text-3xl font-bold">Why businesses scale faster with WhatsApp API?</h2>
        <p class="mt-2 opacity-70">Sales funnel: Leads → WhatsApp → Automation → Payments → Growth 📈</p>
      </div>
      <div class="mt-10 grid gap-6 md:grid-cols-3">
        <div class="glass rounded-2xl p-6 md:col-span-2 reveal-scale">
          <div class="w-full rounded-xl" style="height:367px;background:url(https://cdn.builder.io/api/v1/image/assets%2Fcbde4876b28942a8a39d7ee6208db819%2Fe1089a054f0340afbfba4b21aa113aa1?format=webp) center/cover no-repeat"></div>
        </div>
        <ul class="glass rounded-2xl p-6 space-y-4 reveal-up">
          <li class="flex gap-3"><span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-[hsl(var(--brand-whatsapp))] text-white">✅</span><div><div class="font-semibold">Auto Replies</div><p class="text-sm opacity-70">reply 24/7 without staff.</p></div></li>
          <li class="flex gap-3"><span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-[hsl(var(--brand-whatsapp))] text-white">✅</span><div><div class="font-semibold">Smart Buttons</div><p class="text-sm opacity-70">customers just tap → buy.</p></div></li>
          <li class="flex gap-3"><span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-[hsl(var(--brand-whatsapp))] text-white">✅</span><div><div class="font-semibold">Bulk Campaigns</div><p class="text-sm opacity-70">reach 1000s instantly.</p></div></li>
          <li class="flex gap-3"><span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-[hsl(var(--brand-whatsapp))] text-white">✅</span><div><div class="font-semibold">Payments inside WhatsApp</div><p class="text-sm opacity-70">no drop-offs.</p></div></li>
          <li class="flex gap-3"><span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-[hsl(var(--brand-whatsapp))] text-white">✅</span><div><div class="font-semibold">Analytics Dashboard</div><p class="text-sm opacity-70">track conversions live.</p></div></li>
        </ul>
      </div>
    </section>

    <!-- Onboarding -->
    <section id="onboarding" class="mx-auto mt-20 max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="text-center reveal-up">
        <h2 class="text-3xl font-bold">Easy Onboarding, Step by Step 🪜</h2>
      </div>
    </section>

    <!-- Meta Guide -->
    <section id="guide" class="mx-auto mt-20 max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="grid items-start gap-8 md:grid-cols-2">
        <div class="reveal-up">
          <h2 class="text-3xl font-bold">Step by Step Guide – Get WhatsApp API from Meta</h2>
          <ol class="mt-6 space-y-3">
            <li class="glass flex items-start gap-3 rounded-xl p-4"><span class="grid h-8 w-8 place-items-center rounded-full bg-[hsl(var(--brand-whatsapp))] text-white font-bold">1</span><p class="pt-1">Login to Meta Business Manager.</p></li>
            <li class="glass flex items-start gap-3 rounded-xl p-4"><span class="grid h-8 w-8 place-items-center rounded-full bg-[hsl(var(--brand-whatsapp))] text-white font-bold">2</span><p class="pt-1">Create a Business App → Add ‘WhatsApp’ product.</p></li>
            <li class="glass flex items-start gap-3 rounded-xl p-4"><span class="grid h-8 w-8 place-items-center rounded-full bg-[hsl(var(--brand-whatsapp))] text-white font-bold">3</span><p class="pt-1">Add Phone Number (must receive SMS/Call OTP).</p></li>
            <li class="glass flex items-start gap-3 rounded-xl p-4"><span class="grid h-8 w-8 place-items-center rounded-full bg-[hsl(var(--brand-whatsapp))] text-white font-bold">4</span><p class="pt-1">Verify Business with legal docs. GST, MSME, ETC</p></li>
            <li class="glass flex items-start gap-3 rounded-xl p-4"><span class="grid h-8 w-8 place-items-center rounded-full bg-[hsl(var(--brand-whatsapp))] text-white font-bold">5</span><p class="pt-1">Get Permanent Access Token + Phone Number ID.</p></li>
            <li class="glass flex items-start gap-3 rounded-xl p-4"><span class="grid h-8 w-8 place-items-center rounded-full bg-[hsl(var(--brand-whatsapp))] text-white font-bold">6</span><p class="pt-1">Connect with Grekam Wabot → Setup automation in minutes.</p></li>
          </ol>
        </div>
        <div class="glass rounded-2xl p-6 reveal-scale">
          <div class="aspect-[16/10] w-full rounded-xl" style="background:url(https://cdn.builder.io/api/v1/image/assets%2Fcbde4876b28942a8a39d7ee6208db819%2F32b827de2ed94e21ab65956ac4af9e70) center/cover no-repeat"></div>
          <p class="mt-3 text-sm opacity-70">Illustrations of Meta verification flow</p>
        </div>
      </div>
    </section>

    <!-- Automation Prototype -->
        <div class="glass rounded-2xl p-6 reveal-scale">
          <div class="mx-auto w-full max-w-sm rounded-[2rem] border bg-white doodle">
            <div class="flex items-center justify-between rounded-t-[2rem] px-4 py-3 text-white" style="background:hsl(var(--brand-whatsapp-dark))"><div class="text-sm font-semibold">Grekam Bot</div><div class="flex gap-1 text-xs opacity-90"><span>online</span><span class="h-2 w-2 rounded-full bg-emerald-400"></span></div></div>
            <div class="p-3 space-y-2 min-h-[360px]">
              <div class="ml-auto max-w-[80%] rounded-2xl rounded-br-none bg-emerald-100 p-2 text-sm">Hi, do you have T-Shirts?</div>
              <div class="max-w-[80%] rounded-2xl rounded-bl-none bg-white p-2 text-sm">Yes! 🧥 We have fresh arrivals. Get 10% OFF today! Choose an option below 👇</div>
              <div class="max-w-[80%] rounded-2xl rounded-bl-none bg-white p-2 text-sm">Choose an option 👇
                <div class="mt-2 flex flex-wrap gap-2">
                  <button class="rounded-lg bg-[hsl(var(--brand-whatsapp))] px-2 py-1 text-xs text-white">View T-Shirts</button>
                  <button class="rounded-lg bg-[hsl(var(--brand-whatsapp))] px-2 py-1 text-xs text-white">Check Offers</button>
                  <button class="rounded-lg bg-[hsl(var(--brand-whatsapp))] px-2 py-1 text-xs text-white">Talk to Support</button>
                </div>
              </div>
              <div class="max-w-[85%] rounded-2xl rounded-bl-none bg-white p-2 text-sm">
                <div class="flex items-center gap-3"><div class="h-12 w-12 rounded-lg bg-gradient-to-br from-black/10 to-black/5"></div><div><div class="font-semibold">Classic Tee</div><div class="text-xs opacity-70">₹799</div></div></div>
                <button class="mt-2 w-full rounded-lg bg-[hsl(var(--brand-secondary))] px-3 py-1 text-white">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Calculator -->
    <section id="calculator" class="mx-auto mt-20 max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="text-center reveal-up">
        <h2 class="text-3xl font-bold">Know Your Messaging Cost 💰</h2>
        <p class="mt-2 opacity-70">Enter conversation counts and unit prices for each Meta category.</p>
      </div>
      <div class="mt-8 grid items-start gap-6 lg:grid-cols-2">
        <div class="glass rounded-2xl p-6 reveal-up">
          <div class="grid gap-4 sm:grid-cols-2" id="calc-cards">
            <!-- Cards injected by JS -->
          </div>
          <div class="mt-4 flex flex-wrap justify-between gap-3">
            <button id="resetCalc" class="btn-secondary">Reset</button>
            <a href="https://wabot.grekam.in/auth/login" target="_self" class="btn-primary">Start Free Trial</a>
          </div>
        </div>
        <div class="glass rounded-2xl p-6 reveal-scale">
          <div class="text-lg font-semibold">Monthly Cost Summary</div>
          <div class="mt-4 space-y-3" id="calc-summary"></div>
          <div class="mt-6 rounded-2xl p-1" style="background:rgba(148,238,226,1)">
            <div class="rounded-2xl bg-white p-5 text-center">
              <div class="text-sm font-medium opacity-80">Estimated Total</div>
              <div id="calc-total" class="mt-1 text-4xl font-extrabold">₹0.00</div>
              <div class="mt-2 text-xs opacity-70">Note: Meta pricing varies by region and category. Enter your applicable unit prices.</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Use Cases -->
    <section id="use-cases" class="mx-auto mt-20 max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="text-center reveal-up">
        <h2 class="text-3xl font-bold">Tailored Solutions for Every Business</h2>
        <p class="mt-2 opacity-70">From retail to healthcare, WhatsApp API empowers businesses with automation, engagement, and growth.</p>
      </div>
      <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3 reveal-up" id="use-cards"></div>
    </section>

    <!-- Pricing -->
    <section id="pricing" class="mx-auto mt-20 max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="text-center reveal-up">
        <h2 class="text-3xl font-bold">Simple, Transparent Pricing</h2>
        <p class="mt-2 opacity-70">Choose the plan that fits your business needs</p>
      </div>
      <div class="mt-10 grid gap-6 lg:grid-cols-3 reveal-up">
        <div class="glass relative rounded-2xl p-6">
          <h3 class="text-xl font-bold">Free</h3>
          <div class="mt-3 text-3xl font-extrabold">₹0 / month</div>
          <p class="mt-2 text-sm opacity-70">+ WhatsApp Messaging Charges</p>
          <ul class="mt-4 space-y-2 text-sm">
            <li>• 200 Conversations / month</li><li>• 20 Template messages</li><li>• ✕ Chatbot & auto-replies</li><li>• 1 Team member</li><li>• ✕ Multiple phone numbers</li>
          </ul>
          <div class="mt-6">
            <a target="_self" href="https://wabot.grekam.in/auth/login" class="btn-primary">Get Started Free</a>
          </div>
        </div>
        <div class="glass relative rounded-2xl p-6 ring-2 ring-[hsl(var(--brand-secondary))]">
          <span class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-[hsl(var(--brand-secondary))] px-3 py-1 text-xs font-semibold text-white">Most Popular</span>
          <h3 class="text-xl font-bold">Starter</h3>
          <div class="mt-3 text-3xl font-extrabold">₹599 / month</div>
          <p class="mt-2 text-sm opacity-70">₹5,999 / year + WhatsApp Messaging Charges</p>
          <ul class="mt-4 space-y-2 text-sm">
            <li>• 1,000 Conversations / month</li><li>• 200 Template messages</li><li>• ✓ Chatbot & auto-replies</li><li>• 3 Team members</li><li>• ✓ Multiple phone numbers</li>
          </ul>
          <div class="mt-6">
            <a target="_self" href="https://wabot.grekam.in/auth/login" class="btn-primary">Start 14-Day Trial</a>
          </div>
        </div>
        <div class="glass relative rounded-2xl p-6">
          <h3 class="text-xl font-bold">Professional</h3>
          <div class="mt-3 text-3xl font-extrabold">₹999 / month</div>
          <p class="mt-2 text-sm opacity-70">₹9,999 / year + WhatsApp Messaging Charges</p>
          <ul class="mt-4 space-y-2 text-sm">
            <li>• Unlimited Conversations</li><li>• Unlimited Templates</li><li>• ✓ Advanced chatbot features</li><li>• 10 Team members</li><li>• ✓ Priority support</li>
          </ul>
          <div class="mt-6">
            <a target="_self" href="https://wabot.grekam.in/auth/login" class="btn-primary">Start 14-Day Trial</a>
          </div>
        </div>
        <div class="glass rounded-2xl p-6 lg:col-span-3" style="background:rgba(232, 255, 207, 1)">
          <div class="grid gap-6 md:grid-cols-[1fr_auto] md:items-center">
            <div>
              <div class="text-xl font-bold">Lifetime Access</div>
              <div class="mt-1 text-3xl font-extrabold">₹29,999 one-time payment</div>
              <ul class="mt-3 grid gap-2 text-sm md:grid-cols-2">
                <li>WhatsApp Messaging Charges</li><li>✓ All Professional features included</li><li>✓ Lifetime access with updates</li><li>✓ Priority onboarding & support</li><li>✓ No recurring subscription fees</li><li>✓ Advanced integrations & APIs</li>
              </ul>
            </div>
            <a target="_self" href="https://wabot.grekam.in/auth/login" class="btn-secondary">Get Lifetime Access</a>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="mx-auto mt-20 max-w-5xl px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-bold text-center">Frequently Asked Questions</h2>
      <div class="mt-6 glass rounded-2xl p-4 reveal-up">
        <details class="p-3 border-b"><summary class="cursor-pointer font-medium">What is the WhatsApp Business API?</summary><p class="mt-2 opacity-80">The WhatsApp Business API enables businesses to integrate WhatsApp messaging into their workflows for customer communication, automation, and support at scale.</p></details>
        <details class="p-3 border-b"><summary class="cursor-pointer font-medium">Do I get the official green tick verification?</summary><p class="mt-2 opacity-80">Verification depends on Meta's criteria and approval process. We guide you through the requirements and help improve your chances of approval.</p></details>
        <details class="p-3 border-b"><summary class="cursor-pointer font-medium">Is the platform secure and compliant?</summary><p class="mt-2 opacity-80">Yes, absolutely. We follow Meta's policies and industry best practices for data protection, security, and compliance requirements.</p></details>
        <details class="p-3"><summary class="cursor-pointer font-medium">Can I cancel my subscription anytime?</summary><p class="mt-2 opacity-80">Absolutely. There are no lock-in contracts. You can upgrade, downgrade, or cancel your subscription at any time.</p></details>
      </div>
    </section>

    <!-- CTA (no gradient/background) -->
    <section id="cta" class="mx-auto mt-24 max-w-5xl px-4 sm:px-6 lg:px-8 text-center reveal-up">
      <div class="px-6 py-12">
        <h2 class="text-3xl font-extrabold">Don’t just chat. Sell on WhatsApp.</h2>
        <p class="mt-2 text-lg">Automate. Scale. Grow. With Grekam Wabot</p>
        <div class="mt-6 flex flex-wrap justify-center gap-3">
          <a href="https://wabot.grekam.in/auth/login" target="_self" class="btn-primary">Start Free Today</a>
          <a href="https://wabot.grekam.in/auth/login" target="_blank" class="btn-secondary">Book a Demo</a>
        </div>
      </div>
    </section>
<section id="team" class="mx-auto mt-20 max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="text-center reveal-up">
        <h2 class="text-3xl font-bold">Meet the Team</h2>
        <p class="mt-2 opacity-70">Passionate builders focused on automation and growth.</p>
      </div>
      <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4 reveal-up">
        <div class="glass rounded-2xl p-6 text-center"><div class="mx-auto h-24 w-24 rounded-full shadow-lg" style="background:url(https://cdn.builder.io/api/v1/image/assets%2Fcbde4876b28942a8a39d7ee6208db819%2F4968c5d1e6f844269b1dc49ee9bae296) center/cover no-repeat"></div><div class="mt-4 text-lg font-semibold">Hemalatha</div><div class="text-sm opacity-70">Designer</div></div>
        <div class="glass rounded-2xl p-6 text-center"><div class="mx-auto h-24 w-24 rounded-full shadow-lg" style="background:url(https://cdn.builder.io/api/v1/image/assets%2Fcbde4876b28942a8a39d7ee6208db819%2F10ee970df72f45038d0a805f003ffb28) center/cover no-repeat"></div><div class="mt-4 text-lg font-semibold">Stalinkumar</div><div class="text-sm opacity-70">Founder</div></div>
        <div class="glass rounded-2xl p-6 text-center"><div class="mx-auto h-24 w-24 rounded-full shadow-lg" style="background:url(https://cdn.builder.io/api/v1/image/assets%2Fcbde4876b28942a8a39d7ee6208db819%2F33225c62eb7f4088a9a5fb45e82356f2) center/cover no-repeat"></div><div class="mt-4 text-lg font-semibold">Tamilanban</div><div class="text-sm opacity-70">Product Head</div></div>
        <div class="glass rounded-2xl p-6 text-center"><div class="mx-auto h-24 w-24 rounded-full shadow-lg" style="background:url(https://cdn.builder.io/api/v1/image/assets%2Fcbde4876b28942a8a39d7ee6208db819%2F8faf0e536cd04051b6dd2a3f438e06f6) center/cover no-repeat"></div><div class="mt-4 text-lg font-semibold">Meera</div><div class="text-sm opacity-70">Developer</div></div>
      </div>
    </section>

  <!-- Footer -->
  <footer id="contact" class="mt-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="glass rounded-3xl p-8 md:p-12">
        <div class="grid gap-8 md:grid-cols-3">
          <div>
            <div class="h-[44px] w-[124px] rounded-xl mb-2" style="background:url(https://cdn.builder.io/api/v1/image/assets%2Fcbde4876b28942a8a39d7ee6208db819%2Fcf1c401e99d540609d204b2e23781267) center/cover no-repeat"></div>
            <p class="mt-2 text-sm opacity-70">Automate. Scale. Grow. WhatsApp API BSP Service by Grekam Visual.</p>
            <div class="mt-3 flex flex-wrap gap-4 text-xs">
              <a href="#privacy" class="underline opacity-80 hover:opacity-100">Privacy Policy</a>
              <a href="#terms" class="underline opacity-80 hover:opacity-100">Terms & Conditions</a>
            </div>
          </div>
          <div>
            <h4 class="font-semibold">Contact</h4>
            <ul class="mt-2 space-y-1 text-sm opacity-80">
              <li>Email: support@grekam.in</li>
              <li>Website: www.grekam.in</li>
              <li>Platform: wabot.grekam.in</li>
              <li>Mobile: +91 978935 9407</li>
              <li>Location : Coimbatore, Tamilnadu, India</li>
            </ul>
          </div>
          <div>
            <h4 class="font-semibold">Quick Links</h4>
            <div class="mt-2 flex flex-wrap gap-2">
              <a href="#pricing" class="btn-primary px-4 py-2">View Pricing</a>
              <a href="https://wabot.grekam.in/auth/login" target="_blank" class="btn-secondary px-4 py-2">Book a Demo</a>
            </div>
          </div>
        </div>
        <div class="mt-8 border-t pt-6 text-xs opacity-60">© 2025 Grekam Visuals. All rights reserved.</div>
      </div>
    </div>
  </footer>

  <!-- Sticky bottom CTA -->
  <div id="sticky-cta" class="fixed inset-x-3 bottom-3 z-40">
    <div class="glass reveal-up flex items-center justify-between gap-3 rounded-xl px-4 py-3">
      <span class="text-sm font-medium">Ready to automate on WhatsApp?</span>
      <div class="flex items-center gap-2">
        <a href="https://wabot.grekam.in/auth/login" target="_blank" class="btn-primary">Start Free Trial</a>
        <button aria-label="Dismiss" class="rounded-full border p-2 hover:bg-black/5" onclick="dismissSticky()">✕</button>
      </div>
    </div>
  </div>

  <script>
    // Reveal animations
    const io = new IntersectionObserver((entries)=>{
      entries.forEach(e=>{
        if(e.isIntersecting){ e.target.classList.add('is-visible'); io.unobserve(e.target); }
      })
    },{threshold:0.15, rootMargin:'0px 0px -10% 0px'});
    document.querySelectorAll('.reveal-up, .reveal-scale, .reveal-fade').forEach(el=>io.observe(el));

    // Sticky CTA persist dismissal
    const stickyKey='gw_sticky_dismissed';
    function dismissSticky(){ localStorage.setItem(stickyKey,'1'); document.getElementById('sticky-cta')?.remove(); }
    if(localStorage.getItem(stickyKey)==='1'){ document.getElementById('sticky-cta')?.remove(); }

    // Calculator
    const cats=['utility','authentication','service','marketing'];
    const state = Object.fromEntries(cats.map(c=>[c,{conversations:0, price:0}]));
    const cards = document.getElementById('calc-cards');
    const summary = document.getElementById('calc-summary');
    const totalEl = document.getElementById('calc-total');
    function money(n){ return '₹'+(Number(n)||0).toFixed(2); }
    function renderCalc(){
      // cards
      cards.innerHTML='';
      cats.forEach(cat=>{
        const box=document.createElement('div');
        box.className='rounded-xl border p-4';
        box.innerHTML=`
          <div class="text-sm font-semibold capitalize">${cat}</div>
          <label class="mt-3 block text-xs opacity-70">Conversations</label>
          <input type="number" inputmode="numeric" class="mt-1 w-full rounded-lg border px-3 py-2" placeholder="0" value="${state[cat].conversations}" data-role="conv" data-cat="${cat}" />
          <label class="mt-3 block text-xs opacity-70">Price per conversation (₹)</label>
          <input type="number" step="0.01" inputmode="decimal" class="mt-1 w-full rounded-lg border px-3 py-2" placeholder="0" value="${state[cat].price}" data-role="price" data-cat="${cat}" />
          <div class="mt-3 text-sm">Subtotal: <span class="font-semibold" data-role="sub-${cat}">${money(state[cat].conversations*state[cat].price)}</span></div>
        `;
        cards.appendChild(box);
      });
      cards.querySelectorAll('input').forEach(inp=>{
        inp.addEventListener('input', e=>{
          const el=e.target; const cat=el.getAttribute('data-cat'); const role=el.getAttribute('data-role');
          const val = Number(el.value||0);
          if(role==='conv') state[cat].conversations=val; else state[cat].price=val;
          updateSummary();
        });
      });
      updateSummary();
    }
    function updateSummary(){
      summary.innerHTML='';
      let total=0;
      cats.forEach(cat=>{
        const sub = (state[cat].conversations||0)*(state[cat].price||0);
        total+=sub;
        const row=document.createElement('div');
        row.className='flex items-center justify-between rounded-lg bg-black/5 p-3 text-sm';
        row.innerHTML=`<span class="capitalize">${cat}</span><span class="font-semibold">${money(sub)}</span>`;
        summary.appendChild(row);
        const subEl=document.querySelector(`[data-role="sub-${cat}"]`); if(subEl) subEl.textContent=money(sub);
      });
      totalEl.textContent=money(total);
    }
    document.getElementById('resetCalc')?.addEventListener('click', ()=>{
      cats.forEach(c=>{ state[c]={conversations:0, price:0}; });
      renderCalc();
    });
    renderCalc();

    // Use cases
    const use = [
      {emoji:'🛍️', title:'Retail & D2C', desc:'Drive repeat purchases with offers, reminders and product updates.'},
      {emoji:'🏥', title:'Healthcare', desc:'Send reports, reminders, and appointment confirmations automatically.'},
      {emoji:'🏨', title:'Hospitality', desc:'24/7 bookings, confirmations and feedback collection on WhatsApp.'},
      {emoji:'🎓', title:'Education', desc:'Leads nurturing, fee reminders and results delivery with templates.'},
      {emoji:'🚚', title:'Logistics', desc:'Real-time tracking updates and proactive customer notifications.'},
      {emoji:'💳', title:'Fintech', desc:'KYC, OTP and statement delivery with authentication templates.'}
    ];
    const useWrap=document.getElementById('use-cards');
    use.forEach(c=>{
      const card=document.createElement('div');
      card.className='glass rounded-2xl p-6';
      card.innerHTML=`<div class="text-3xl">${c.emoji}</div><div class="mt-3 text-lg font-semibold">${c.title}</div><p class="mt-1 text-sm opacity-70">${c.desc}</p>`;
      useWrap.appendChild(card);
    });
  </script>
</body>
</html>
```