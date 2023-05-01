const nav = document.querySelector('nav');
const navLinks = nav.querySelectorAll('a');

for (let i = 0; i < navLinks.length; i++) {
  navLinks[i].addEventListener('click', (event) => {
    event.preventDefault();
    const target = event.target.getAttribute('href');
    document.querySelector(target).scrollIntoView({
      behavior: 'smooth'
    });
  });
}


// Get all the buttons and sections
const buttons = navLinks;
const sections = document.querySelectorAll('section');

// Loop through the buttons and add a click event listener
buttons.forEach(button => {
  button.addEventListener('click', () => {
    // Remove the active class from all buttons
    buttons.forEach(btn => btn.classList.remove('active'));
    // Add the active class to the clicked button
    button.classList.add('active');
  });
});


  // $(function() {
  //   $('.bg-image').hover(function() {
      
  //   // Get the data attribute for the section ID and add the active class to the corresponding button
  //   // const sectionId = section.getAttribute('id');
  //   // const button = document.querySelector(`.nav-button[data-section="${sectionId}"]`);
  //   // console.log(sectionId)
  //   // console.log(button);
    
  // });

  sections.forEach(section => {
  $(function() {
    $(section).mouseenter(function() {
    const sectionId = section.getAttribute('id');
    const button = document.querySelector(`.nav-button[data-section="${sectionId}"]`);
    buttons.forEach(btn => btn.classList.remove('active'));
    button.classList.add('active');
    });
  });
});