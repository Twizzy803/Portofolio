import React from "react";
import ProjectCard from "./ProjectCard";

// Ini adalah data proyek kita. Anda bisa mengambil ini dari database Laravel nanti.
const projects = [
    {
        id: 1,
        imageUrl: "https://images.unsplash.com/photo-1554995207-c18c203602cb",
        title: "Interior Design",
        description: "Modern and minimalist living room.",
    },
    {
        id: 2,
        imageUrl: "https://images.unsplash.com/photo-1542359649-31e03cdde4fe",
        title: "Architecture",
        description: "Symmetric building facade design.",
    },
    {
        id: 3,
        imageUrl:
            "https://images.unsplash.com/photo-1511818966892-fe77b81e1020",
        title: "Concrete Study",
        description: "Exploring brutalist architecture forms.",
    },
    {
        id: 4,
        imageUrl:
            "https://images.unsplash.com/photo-1454496522488-7a8e488e8606",
        title: "Mountain Peak",
        description: "Winter expedition to the alps.",
    },
    {
        id: 5,
        imageUrl:
            "https://images.unsplash.com/photo-1527018318514-4139b0a7b469",
        title: "Aviation",
        description: "Capturing flight in the open sky.",
    },
    {
        id: 6,
        imageUrl:
            "https://images.unsplash.com/photo-1588621477439-3a475f76a8d2",
        title: "Design Project",
        description:
            "Contrary to popular belief, Lorem Ipsum is not simply random text.",
    },
];

function ProjectGrid() {
    return (
        <div className="container mx-auto p-10">
            {/* Ini adalah gridnya */}
            <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                {/* Kita 'map' atau ulangi data proyek untuk setiap kartu */}
                {projects.map((project) => (
                    <ProjectCard key={project.id} project={project} />
                ))}
            </div>
        </div>
    );
}

export default ProjectGrid;
