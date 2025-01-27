const dropdownItems = document.querySelectorAll('[data-toggle="dropdown"]');

dropdownItems.forEach((item) => {
  item.addEventListener('click', (event) => {
    event.stopPropagation();
    const dropdown = item.querySelector('.menu__dropdown');

    document.querySelectorAll('.menu__dropdown').forEach((openDropdown) => {
      if (openDropdown !== dropdown) {
        openDropdown.style.display = 'none';
      }
    });

    if (dropdown.style.display === 'flex') {
      dropdown.style.display = 'none';
    } else {
      dropdown.style.display = 'flex';
    }
  });
});

document.addEventListener('click', () => {
  document.querySelectorAll('.menu__dropdown').forEach((dropdown) => {
    dropdown.style.display = 'none';
  });
});

const toggleButton = document.querySelector('.menu__toggle');
const menuList = document.querySelector('.menu__list');

toggleButton.addEventListener('click', () => {
  menuList.classList.toggle('menu__list--active');
  toggleButton.classList.toggle('menu__toggle--active');
});
