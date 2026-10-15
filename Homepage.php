<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>Дмитрий Привень — Разработчик</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="Style/homepage.css">
<link rel="skripts" href="Script/homepage.js">
</head>
<body>

<nav>
  <div class="nav-inner">
    <a href="#home" class="logo">Vexora <span>dev</span></a>
    <ul class="nav-links">
      <li><a href="#home">Главная</a></li>
      <li><a href="#about">Обо мне</a></li>
      <li><a href="#skills">Навыки</a></li>
      <li><a href="#projects">Проекты</a></li>
      <li><a href="#contact">Контакты</a></li>
    </ul>
    <a href="booking-widget.html" class="nav-cta">Связаться</a>
    <button class="burger" id="burger" aria-label="Меню"><span></span><span></span><span></span></button>
  </div>
</nav>

<div class="mobile-menu" id="mobileMenu">
  <a href="#home">Главная</a>
  <a href="#about">Обо мне</a>
  <a href="#skills">Навыки</a>
  <a href="#projects">Проекты</a>
  <a href="#contact">Контакты</a>
</div>

<section class="hero" id="home">
  <div class="hero-grid"></div>
  <div class="hero-glow"></div>
  <div class="container hero-inner">
    <div>
      <div class="status"><span class="dot"></span> Open to work</div>
      <h1>Дмитрий Привень</h1>
      <div class="role">Начинающий разработчик · Web · Python · C# · Unreal Engine</div>
      <p class="desc">Изучаю разработку программного обеспечения, создаю веб-проекты и экспериментирую с разработкой игр. Постепенно превращаю знания и идеи в реальные проекты.</p>
      <div class="btn-row">
        <a href="#projects" class="btn btn-primary">Мои проекты</a>
        <a href="#contact" class="btn btn-outline">Связаться со мной</a>
      </div>
    </div>
    <div class="code-card">
      <div class="dots"><span></span><span></span><span></span></div>
      <div class="ln"><span class="kw">class</span> Developer {</div>
      <div class="ln">&nbsp;&nbsp;name = <span class="str">"Vexora"</span>;</div>
      <div class="ln">&nbsp;&nbsp;learning = [<span class="str">"Python"</span>,</div>
      <div class="ln">&nbsp;&nbsp;&nbsp;&nbsp;<span class="str">"C#"</span>, <span class="str">"Unreal Engine"</span>];</div>
      <div class="ln">&nbsp;&nbsp;status = <span class="str">"growing"</span>;</div>
      <div class="ln">}</div>
    </div>
  </div>
</section>

<section id="about">
  <div class="container about-wrap">
    <div class="reveal">
      <div class="eyebrow">Обо мне</div>
      <h2 class="sec-title">Учусь на практике</h2>
      <div class="about-text">
        <p>Я студент 4 курса, связанного с программированием. Мне интересна разработка программного обеспечения, и я постепенно превращаю теорию в практические навыки — через собственные проекты и учебные задачи.</p>
        <p>Сейчас я изучаю веб-разработку и параллельно работаю над своей игрой на Unreal Engine. Это разные направления, но каждое из них помогает мне лучше понимать, как устроена разработка в целом.</p>
        <p>Я открыт к новым проектам, стажировкам, работе и фриланс-заказам — это возможность применять знания на практике и расти быстрее.</p>
      </div>
    </div>
    <ul class="about-list reveal">
      <li>Студент 4 курса, направление связано с программированием</li>
      <li>Интересуюсь программированием и разработкой ПО</li>
      <li>Изучаю веб-разработку</li>
      <li>Разрабатываю игру на Unreal Engine</li>
      <li>Открыт к стажировкам, работе и фриланс-заказам</li>
    </ul>
  </div>
</section>

<section id="skills" style="background:var(--bg2);">
  <div class="container">
    <div class="eyebrow reveal">Навыки</div>
    <h2 class="sec-title reveal">С чем я работаю</h2>
    <p class="sec-lead reveal">Технологии, которые я изучаю и применяю в собственных и учебных проектах.</p>
    <div class="skills-grid">
      <div class="skill-card reveal"><h3>Python</h3><p>Начальный уровень</p></div>
      <div class="skill-card reveal"><h3>C#</h3><p>Начальный уровень</p></div>
      <div class="skill-card reveal"><h3>JavaScript</h3><p>Учебные и собственные проекты</p></div>
      <div class="skill-card reveal"><h3>PHP</h3><p>Учебные и веб-проекты</p></div>
      <div class="skill-card reveal"><h3>CSS / HTML</h3><p>Веб-разработка</p></div>
      <div class="skill-card reveal"><h3>Unreal Engine</h3><p>Разработка игр · начинающий уровень</p></div>
    </div>
  </div>
</section>

<section id="projects">
  <div class="container">
    <div class="eyebrow reveal">Проекты</div>
    <h2 class="sec-title reveal">Над чем я работаю</h2>
    <p class="sec-lead reveal">Личные и учебные проекты — часть моего пути в разработке.</p>
    <div class="projects">
      <div class="project-card reveal">
        <div class="project-visual"><span class="project-tag">UNREAL ENGINE · В РАЗРАБОТКЕ</span></div>
        <div class="project-body">
          <h3>Zombie Parkour</h3>
          <p>Экспериментальный игровой проект на Unreal Engine в жанре action с зомби, паркуром и оружием. Проект находится в разработке.</p>
          <div class="tech-row"><span class="tech-pill">Unreal Engine</span></div>
        </div>
      </div>
      <div class="project-card reveal">
        <div class="project-visual"><span class="project-tag">WEB</span></div>
        <div class="project-body">
          <h3>Web Project</h3>
          <p>Учебный веб-проект, созданный с использованием JavaScript, PHP и CSS.</p>
          <div class="tech-row">
            <span class="tech-pill">JavaScript</span><span class="tech-pill">PHP</span><span class="tech-pill">CSS</span>
          </div>
        </div>
      </div>
      <div class="project-card reveal">
        <div class="project-visual"><span class="project-tag">УЧЕБНЫЕ ПРОЕКТЫ</span></div>
        <div class="project-body">
          <h3>University Projects</h3>
          <p>Набор учебных проектов, созданных в процессе обучения программированию и разработке программного обеспечения.</p>
          <div class="tech-row"><span class="tech-pill">Python</span><span class="tech-pill">C#</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section style="background:var(--bg2);">
  <div class="container">
    <div class="eyebrow reveal">Сейчас изучаю</div>
    <h2 class="sec-title reveal">Путь развития</h2>
    <div class="timeline">
      <div class="tl-item reveal"><h3>Programming</h3><p>Основы и логика разработки</p></div>
      <div class="tl-item reveal"><h3>Web Development</h3><p>JavaScript, PHP, CSS</p></div>
      <div class="tl-item reveal"><h3>C# / Python</h3><p>Языки общего назначения</p></div>
      <div class="tl-item reveal"><h3>Unreal Engine</h3><p>Разработка игр</p></div>
      <div class="tl-item reveal"><h3>Game Development</h3><p>Собственный проект — Zombie Parkour</p></div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="eyebrow reveal">Почему я</div>
    <h2 class="sec-title reveal">Как я работаю</h2>
    <div class="why-grid">
      <div class="why-item reveal">Быстро учусь новому</div>
      <div class="why-item reveal">Люблю разбираться в новых технологиях</div>
      <div class="why-item reveal">Предпочитаю практическое обучение</div>
      <div class="why-item reveal">Создаю собственные проекты</div>
      <div class="why-item reveal">Не боюсь сложных задач</div>
      <div class="why-item reveal">Постоянно развиваю технические навыки</div>
    </div>
  </div>
</section>

<section id="contact">
  <div class="container">
    <div class="contact-box reveal">
      <h2>Давайте создадим что-нибудь интересное</h2>
      <p>Открыт к стажировкам, работе, фриланс-заказам и интересным проектам.</p>
      <div class="contact-links">
        <a href="https://t.me/dimasssik_sl" class="contact-link">Telegram</a>
        <a href="#" class="contact-link">GitHub</a>
        <a href="#" class="contact-link">Email</a>
      </div>
    </div>
  </div>
</section>

<footer>© 2026 Дмитрий Привень</footer>

<script>
document.getElementById('burger').addEventListener('click', function(){
  document.getElementById('mobileMenu').classList.toggle('open');
});
document.querySelectorAll('.mobile-menu a').forEach(a=>{
  a.addEventListener('click', ()=>document.getElementById('mobileMenu').classList.remove('open'));
});
const io = new IntersectionObserver((entries)=>{
  entries.forEach(e=>{ if(e.isIntersecting){ e.target.classList.add('in'); io.unobserve(e.target); } });
},{threshold:0.15});
document.querySelectorAll('.reveal').forEach(el=>io.observe(el));
</script>
</body>
</html>
