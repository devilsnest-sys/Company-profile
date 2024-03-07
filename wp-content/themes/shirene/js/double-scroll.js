if (CSS.supports("animation-timeline: scroll()") || !CSS.supports("animation-timeline: foo")) {
    document.querySelector(".columns").style.overflowY = "hidden";

    // Set up timeline
    const timeline = new ScrollTimeline({
        scrollSource: document.documentElement,
        timeRange: 1,
        fill: "both"
    });

    // Loop all eligible columns
    document.querySelectorAll(".column-reverse").forEach(($column) => {
        // Flip item order in reverse columns
        $column.style.flexDirection = "column-reverse";

        // Hook Animation
        $column.animate(
            {
                transform: [
                    "translateY(calc(-100% + 100vh))",
                    "translateY(calc(100% - 100vh))"
                ]
            },
            {
                duration: 1,
                fill: "both",
                timeline
            }
        );
    });
}
