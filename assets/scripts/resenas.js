document.addEventListener("DOMContentLoaded", () => {
  const container = document.querySelector('.reviews-container');

  function autoScroll() {
    if (container.scrollLeft + container.clientWidth >= container.scrollWidth) {
      container.scrollTo({ left: 0, behavior: 'smooth' });
    } else {
      container.scrollBy({ left: 300, behavior: 'smooth' });
    }
  }

  setInterval(autoScroll, 3000);
});