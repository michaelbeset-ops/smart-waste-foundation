import { Linkedin, Users } from "lucide-react";
import { useScrollAnimation } from "@/hooks/use-scroll-animation";

const team = [
  {
    name: "Ricardo Beset",
    role: "Directeur & Senior Projectmanager",
    linkedin: "https://www.linkedin.com/in/ricardo-beset",
    description: "Ruim 20 jaar ervaring in afvalinzameling en containerbeheer. Drijvende kracht achter B-Advice en B-Organized.",
  },
  {
    name: "Jayden Beset",
    role: "Werkvoorbereider",
    description: "Verantwoordelijk voor de werkvoorbereiding en coördinatie van projecten in het veld.",
  },
  {
    name: "Leon Lauran",
    role: "Developer & Projectleider",
    linkedin: "https://www.linkedin.com/in/leon-lauran",
    description: "Technisch brein achter het B-Organized platform. Combineert ontwikkeling met projectmanagement.",
  },
];

const timeline = [
  { year: "2001", text: "Start activiteiten in afvalinzameling en recycling" },
  { year: "2010", text: "Focus verschuift naar gemeentelijke inzameling en ondergrondse containersystemen" },
  { year: "2013", text: "Oprichting B-Advice als officieel bedrijf" },
  { year: "2018", text: "Lancering B-Organized platform voor containerbeheer" },
  { year: "Heden", text: "SMART waste management en volledige administratie/registratie" },
];

const OverOns = () => {
  const scrollRef = useScrollAnimation();

  return (
    <div ref={scrollRef}>
      {/* Hero */}
      <section className="bg-navy py-24 lg:py-32">
        <div className="container mx-auto px-4">
          <div className="max-w-3xl">
            <h1 className="font-heading text-4xl md:text-5xl font-bold text-primary-foreground mb-6">
              Over B-Advice
            </h1>
            <p className="text-lg text-primary-foreground/70 leading-relaxed">
              Sinds 2001 actief in de afvalbranche. B-Advice is dé specialist in
              containerbeheer, afvalinzameling en SMART waste management voor
              gemeenten en organisaties door heel Nederland.
            </p>
          </div>
        </div>
      </section>

      {/* Timeline */}
      <section className="py-20">
        <div className="container mx-auto px-4">
          <h2 className="font-heading text-3xl font-bold text-foreground mb-12 animate-on-scroll">
            Onze geschiedenis
          </h2>
          <div className="max-w-3xl space-y-0 stagger-children">
            {timeline.map((item, i) => (
              <div key={i} className="animate-on-scroll flex gap-6 pb-10 relative">
                <div className="flex flex-col items-center">
                  <div className="w-4 h-4 rounded-full bg-accent shrink-0 mt-1" />
                  {i < timeline.length - 1 && <div className="w-0.5 flex-1 bg-border" />}
                </div>
                <div>
                  <span className="text-sm font-bold text-accent">{item.year}</span>
                  <p className="text-foreground mt-1">{item.text}</p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Team */}
      <section className="py-20 bg-secondary">
        <div className="container mx-auto px-4">
          <div className="flex items-center gap-3 mb-12 animate-on-scroll">
            <Users size={28} className="text-accent" />
            <h2 className="font-heading text-3xl font-bold text-foreground">
              Ons team
            </h2>
          </div>
          <div className="grid grid-cols-1 md:grid-cols-3 gap-8 stagger-children">
            {team.map((member) => (
              <div
                key={member.name}
                className="animate-on-scroll bg-card rounded-xl p-8 hover-lift border border-border"
              >
                <div className="w-16 h-16 rounded-full bg-navy flex items-center justify-center mb-5">
                  <span className="text-primary-foreground font-heading font-bold text-xl">
                    {member.name.split(" ").map((n) => n[0]).join("")}
                  </span>
                </div>
                <h3 className="font-heading text-lg font-bold text-foreground">
                  {member.name}
                </h3>
                <p className="text-accent text-sm font-medium mb-3">{member.role}</p>
                <p className="text-muted-foreground text-sm leading-relaxed mb-4">
                  {member.description}
                </p>
                {member.linkedin && (
                  <a
                    href={member.linkedin}
                    target="_blank"
                    rel="noopener noreferrer"
                    className="inline-flex items-center gap-1.5 text-sm text-accent hover:text-green-dark transition-colors font-medium"
                  >
                    <Linkedin size={16} /> LinkedIn
                  </a>
                )}
              </div>
            ))}
          </div>
        </div>
      </section>
    </div>
  );
};

export default OverOns;
