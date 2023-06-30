let homenavbar = document.getElementById('home');
let homenavbarfixed = document.getElementById('homefixed');

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      homenavbarfixed.style.visibility = "hidden";
      homenavbarfixed.style.display = "none";
      return;
    }
    homenavbarfixed.style.visibility = "visible";
    homenavbarfixed.style.display = "block";
  });
});

observer.observe(homenavbar);