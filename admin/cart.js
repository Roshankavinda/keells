    new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ['Carrot', 'Drychilli', 'Big onion', 'Potato', 'Pumpkin', 'leek','Red onion','Cauliflower','Beet','Bean','Bell-pepper'],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#9F000F","#7F4E52","#FAAFBE","#FAAFBA","#FF00FF","#461B7E","#FFA500"],
          data: [carrot,carrot1,carrot2,carrot3,carrot4,carrot5,carrot6,carrot7,carrot8,carrot9,carrot10,carrot11]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'vagitable'
      }
    }
});