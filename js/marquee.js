(function()
 {   
  var programs=[
    {title:"Governance & Development Dialogue", desc: "Multi-stakeholder discussions to improve local governance and cooperation."},
    {title:"Civic Space & Democracy Advocacy", desc: "Protecting civic rights and promoting democratic participation."},
    {title:"Capacity Building & Training", desc: "Workshops on leadership, project management, and conflict-sensitive development."},
    {title:"Research & Knowledge Sharing", desc: "Policy briefs and insights on governance and peacebuilding."},
    {title:"Youth & Skills Development", desc: "Training youth in financial literacy, entrepreneurship, and digital skills."},
    {title:"Regional & International Engagement", desc: "Collaborating with global networks on development and peace initiatives."}
  ];

  var doubled = programs.concat(programs);
  var track = document.getElementById('cggap-track');

  doubled.forEach(function (p) {
    var card = document.createElement('div');
    card.className = 'prog-card';
    card.innerHTML =
      '<div class="prog-card-dot"></div>' + /*or tagline for each program*/
      '<h3>' + p.title + '</h3>' +
      '<p>' + p.desc + '</p>';
    track.appendChild(card);
  });
})();