// Close the mobile menu when a link is tapped
document.querySelectorAll('.nav-links a').forEach(function (a) {
  a.addEventListener('click', function () {
    document.body.classList.remove('nav-open');
  });
});

// FAQ: keep only one item open at a time
document.querySelectorAll('.faq-item').forEach(function (item) {
  item.addEventListener('toggle', function () {
    if (item.open) {
      document.querySelectorAll('.faq-item[open]').forEach(function (other) {
        if (other !== item) other.open = false;
      });
    }
  });
});
