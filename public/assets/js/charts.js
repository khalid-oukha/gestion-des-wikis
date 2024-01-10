const xValues = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
const yValues = [1000,400,633,288,899,909,200,450];
new Chart("Tickets", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      // backgroundColor:"rgba(0,75,50,1.0)",
      borderColor: "rgba(255,110,0,0.5)",
      data: yValues
    }]
  },
  options:{tickets}
}); 
// Nations Pie Chart 
var xxValues = ["Morocco", "Algheria", "Mauritania", "Tanzania", "South Africa","Tunisia", "Egypt", "Evory Cost", "Mouzambique", "alaallalal"];
var yyValues = [55, 49, 44, 24, 15,12, 3, 19, 1, 20];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("Nations", {
  type: "pie",
  data: {
    labels: xxValues,
    datasets: [{
      backgroundColor: barColors,
      data: yyValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Played Games for different Nations"
    }
  }
});