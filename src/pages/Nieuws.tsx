import { Calendar, Tag, ArrowRight } from "lucide-react";
import { useState } from "react";
import { useScrollAnimation } from "@/hooks/use-scroll-animation";

const categories = ["Alle", "Innovatie", "Gemeenten", "Duurzaamheid", "B-Organized"];

const articles = [
  {
    title: "SMART containers: de toekomst van gemeentelijke afvalinzameling",
    excerpt: "Hoe slimme sensoren en data-analyse het afvalbeheer van gemeenten transformeren.",
    category: "Innovatie",
    date: "15 maart 2026",
  },
  {
    title: "Gemeente Houten kiest voor B-Advice containerproject",
    excerpt: "B-Advice begeleidt het complete vervangingsproject van ondergrondse containers in Houten.",
    category: "Gemeenten",
    date: "28 februari 2026",
  },
  {
    title: "Circulaire economie: refurbishment van containers",
    excerpt: "Hoe refurbishment bijdraagt aan duurzaamheid én kostenbesparingen in de afvalbranche.",
    category: "Duurzaamheid",
    date: "10 februari 2026",
  },
  {
    title: "B-Organized 3.0: nieuwe rapportagefuncties",
    excerpt: "De nieuwste versie van ons platform biedt uitgebreidere rapportages en dashboards.",
    category: "B-Organized",
    date: "20 januari 2026",
  },
  {
    title: "Bewonersparticipatie bij containerplaatsingen",
    excerpt: "Tips en best practices voor effectieve communicatie met bewoners bij afvalprojecten.",
    category: "Gemeenten",
    date: "5 januari 2026",
  },
  {
    title: "Meerjaren investeringsplan: strategisch containerbeheer",
    excerpt: "Waarom een MIP essentieel is voor efficiënt en toekomstbestendig containerbeheer.",
    category: "Innovatie",
    date: "18 december 2025",
  },
];

const Nieuws = () => {
  const [filter, setFilter] = useState("Alle");
  const scrollRef = useScrollAnimation();

  const filtered = filter === "Alle" ? articles : articles.filter((a) => a.category === filter);

  return (
    <div ref={scrollRef}>
      <section className="bg-navy py-24 lg:py-32">
        <div className="container mx-auto px-4">
          <div className="max-w-3xl">
            <h1 className="font-heading text-4xl md:text-5xl font-bold text-primary-foreground mb-6">
              Nieuws
            </h1>
            <p className="text-lg text-primary-foreground/70 leading-relaxed">
              Blijf op de hoogte van het laatste nieuws, innovaties en ontwikkelingen
              in de afvalbranche.
            </p>
          </div>
        </div>
      </section>

      <section className="py-20">
        <div className="container mx-auto px-4">
          {/* Filters */}
          <div className="flex flex-wrap gap-2 mb-12 animate-on-scroll">
            {categories.map((cat) => (
              <button
                key={cat}
                onClick={() => setFilter(cat)}
                className={`px-4 py-2 rounded-lg text-sm font-medium transition-colors ${
                  filter === cat
                    ? "bg-accent text-accent-foreground"
                    : "bg-secondary text-muted-foreground hover:bg-border"
                }`}
              >
                {cat}
              </button>
            ))}
          </div>

          {/* Articles */}
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 stagger-children">
            {filtered.map((article) => (
              <article
                key={article.title}
                className="animate-on-scroll bg-card rounded-xl border border-border hover-lift overflow-hidden group cursor-pointer"
              >
                <div className="h-2 bg-accent" />
                <div className="p-7">
                  <div className="flex items-center gap-4 text-xs text-muted-foreground mb-4">
                    <span className="flex items-center gap-1">
                      <Calendar size={12} /> {article.date}
                    </span>
                    <span className="flex items-center gap-1">
                      <Tag size={12} /> {article.category}
                    </span>
                  </div>
                  <h3 className="font-heading text-lg font-bold text-foreground mb-3 group-hover:text-accent transition-colors">
                    {article.title}
                  </h3>
                  <p className="text-muted-foreground text-sm leading-relaxed mb-4">
                    {article.excerpt}
                  </p>
                  <span className="inline-flex items-center gap-1 text-accent font-semibold text-sm group-hover:gap-2 transition-all">
                    Lees meer <ArrowRight size={14} />
                  </span>
                </div>
              </article>
            ))}
          </div>
        </div>
      </section>
    </div>
  );
};

export default Nieuws;
