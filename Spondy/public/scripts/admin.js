document.addEventListener("DOMContentLoaded", async () => {
    try {
        // Récupérer les données via fetch
        const response = await fetch("../../administrateur/get_data.php");
        if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);

        const data = await response.json(); // Parse le JSON reçu
        const total = data.reduce((sum, d) => sum + d.count, 0);

        const width = 400, height = 400, radius = Math.min(width, height) / 2;

        const svg = d3.select("#pie-chart") // Sélecteur correct pour le div
            .append("svg")
            .attr("width", width)
            .attr("height", height)
            .append("g")
            .attr("transform", `translate(${width / 2}, ${height / 2})`);

        const color = d3.scaleOrdinal(d3.schemeCategory10);

        const pie = d3.pie().value(d => d.count); // Définir la valeur utilisée pour les parts
        const arc = d3.arc().innerRadius(0).outerRadius(radius);

        svg.selectAll("path")
            .data(pie(data)) // Les données du graphique
            .join("path")
            .attr("d", arc)
            .attr("fill", d => color(d.data.region)) // Couleur basée sur la région
            .attr("stroke", "white")
            .style("stroke-width", "2px");

        svg.selectAll("text")
            .data(pie(data))
            .join("text")
            .attr("transform", d => `translate(${arc.centroid(d)})`)
            .style("text-anchor", "middle")
            .text(d => d.data.region + ` ${((d.data.count / total) * 100).toFixed(1)}%`);

    } catch (error) {
        console.error("Erreur lors de la génération du graphique :", error);
    }
});


async function renderAgeChart() {
    const response = await fetch('../../administrateur/get_ages.php');
    const rawData = await response.json();

    // Regrouper les âges en catégories
    const groupedData = [
        { label: "10-18 ans", count: rawData.filter(d => d.age >= 10 && d.age <= 18).reduce((sum, d) => sum + d.count, 0) },
        { label: "18-35 ans", count: rawData.filter(d => d.age > 18 && d.age <= 35).reduce((sum, d) => sum + d.count, 0) },
        { label: "35 ans et plus", count: rawData.filter(d => d.age > 35).reduce((sum, d) => sum + d.count, 0) }
    ];

    const total = groupedData.reduce((sum, d) => sum + d.count, 0);

    const width = 500, height = 300, barPadding = 5;
    const barWidth = width / groupedData.length;

    const svg = d3.select("#bar-chart")
        .append("svg")
        .attr("width", width)
        .attr("height", height);

    const yScale = d3.scaleLinear()
        .domain([0, d3.max(groupedData, d => d.count)])
        .range([0, height - 50]);

    // Barres
    svg.selectAll("rect")
        .data(groupedData)
        .join("rect")
        .attr("y", d => height - yScale(d.count) - 30)
        .attr("height", d => yScale(d.count))
        .attr("width", barWidth - barPadding)
        .attr("transform", (d, i) => `translate(${i * barWidth}, 0)`)
        .attr("fill", "steelblue");

    // Pourcentages au-dessus des barres
    svg.selectAll(".text-percentage")
        .data(groupedData)
        .join("text")
        .attr("class", "text-percentage")
        .text(d => `${((d.count / total) * 100).toFixed(1)}%`)
        .attr("y", d => height - yScale(d.count) - 35)
        .attr("x", (d, i) => i * barWidth + barWidth / 4)
        .attr("fill", "black");

    // Titres sous les barres
    svg.selectAll(".text-label")
        .data(groupedData)
        .join("text")
        .attr("class", "text-label")
        .text(d => d.label)
        .attr("y", height - 10)
        .attr("x", (d, i) => i * barWidth + barWidth / 4)
        .attr("fill", "black")
        .style("text-anchor", "middle");
}
renderAgeChart();




async function renderNeedsChart() {
    const response = await fetch('../../administrateur/get_needs.php'); // Créez ce fichier
    const data = await response.json();

    const total = data.reduce((sum, d) => sum + d.count, 0);

    const width = 500, height = 300, barPadding = 5;
    const barWidth = width / data.length;

    const svg = d3.select("#needs-chart")
        .append("svg")
        .attr("width", width)
        .attr("height", height);

    const yScale = d3.scaleLinear()
        .domain([0, d3.max(data, d => d.count)])
        .range([0, height - 50]);

    // Barres verticales
    svg.selectAll("rect")
        .data(data)
        .join("rect")
        .attr("y", d => height - yScale(d.count) - 30)
        .attr("height", d => yScale(d.count))
        .attr("width", barWidth - barPadding)
        .attr("transform", (d, i) => `translate(${i * barWidth}, 0)`)
        .attr("fill", "steelblue");

    // Pourcentages au-dessus des barres
    svg.selectAll(".text-percentage")
        .data(data)
        .join("text")
        .attr("class", "text-percentage")
        .text(d => `${((d.count / total) * 100).toFixed(1)}%`)
        .attr("y", d => height - yScale(d.count) - 35)
        .attr("x", (d, i) => i * barWidth + barWidth / 4)
        .attr("fill", "black");

    // Titres sous les barres
    svg.selectAll(".text-label")
        .data(data)
        .join("text")
        .attr("class", "text-label")
        .text(d => d.need)
        .attr("y", height - 10)
        .attr("x", (d, i) => i * barWidth + barWidth / 4)
        .attr("fill", "black")
        .style("text-anchor", "middle");
}
renderNeedsChart();