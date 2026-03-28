import { Link } from "react-router-dom";
import {
  Trash2, MapPin, ClipboardList, BarChart3,
  Wrench, FileText, MessageSquare, Monitor, ArrowRight,
} from "lucide-react";
import { useScrollAnimation } from "@/hooks/use-scroll-animation";

const services = [
  {
    icon: Trash2,
    title: "Afvalinzameling & Management",
    description: "Advies en begeleiding bij de volledige afvalinzameling. Van strategie tot uitvoering.",
    link: "#",
  },
  {
    icon: MapPin,
    title: "Plaatsen afval inzamelmiddelen",
    description: "Projectbegeleiding bij het plaatsen van bovengrondse en ondergrondse containers.",
    link: "#",
  },
  {
    icon: ClipboardList,
    title: "Projectmanagement",
    description: "Ervaren projectmanagement voor gemeentelijke afvalprojecten van A tot Z.",
    link: "#",
  },
  {
    icon: BarChart3,
    title: "Meerjaren investeringsplan (MIP)",
    description: "Strategische planning en budgettering voor uw containerpark op de lange termijn.",
    link: "#",
  },
  {
    icon: Wrench,
    title: "Beheer, onderhoud & refurbish",
    description: "Levensduurverlenging van uw inzamelmiddelen door professioneel onderhoud en refurbishment.",
    link: "#",
  },
  {
    icon: FileText,
    title: "Aanbesteding & bestek",
    description: "Ondersteuning bij aanbestedingstrajecten en het opstellen van bestekken.",
    link: "#",
  },
  {
    icon: MessageSquare,
    title: "Bewonersparticipatie & Communicatie",
    description: "Effectieve communicatie met bewoners bij afvalprojecten en wijzigingen.",
    link: "#",
  },
  {
    icon: Monitor,
    title: "B-Organized",
    description: "Ons SMART platform voor het beheren van al uw inzamelmiddelen. Real-time overzicht en rapportages.",
    link: "/b-organized",
    highlight: true,
  },
];

const Diensten = () => {
  const scrollRef = useScrollAnimation();

  return (
    <div ref={scrollRef}>
      <section className="bg-navy py-24 lg:py-32">
        <div className="container mx-auto px-4">
          <div className="max-w-3xl">
            <h1 className="font-heading text-4xl md:text-5xl font-bold text-primary-foreground mb-6">
              Onze Diensten
            </h1>
            <p className="text-lg text-primary-foreground/70 leading-relaxed">
              Van advies tot uitvoering, van aanbesteding tot beheer. B-Advice
              ondersteunt gemeenten en organisaties bij elk aspect van afvalinzameling
              en containermanagement.
            </p>
          </div>
        </div>
      </section>

      <section className="py-20">
        <div className="container mx-auto px-4">
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 stagger-children">
            {services.map((service) => (
              <Link
                key={service.title}
                to={service.link}
                className={`animate-on-scroll rounded-xl p-7 hover-lift border transition-colors group ${
                  service.highlight
                    ? "bg-navy text-primary-foreground border-navy"
                    : "bg-card text-foreground border-border"
                }`}
              >
                <div
                  className={`w-12 h-12 rounded-lg flex items-center justify-center mb-5 ${
                    service.highlight ? "bg-accent/20" : "bg-accent/10"
                  }`}
                >
                  <service.icon size={24} className="text-accent" />
                </div>
                <h3 className="font-heading text-lg font-bold mb-2">
                  {service.title}
                </h3>
                <p
                  className={`text-sm leading-relaxed mb-4 ${
                    service.highlight ? "text-primary-foreground/70" : "text-muted-foreground"
                  }`}
                >
                  {service.description}
                </p>
                <span className="inline-flex items-center gap-1 text-accent font-semibold text-sm group-hover:gap-2 transition-all">
                  Meer informatie <ArrowRight size={14} />
                </span>
              </Link>
            ))}
          </div>
        </div>
      </section>

      {/* CTA */}
      <section className="py-20 bg-secondary">
        <div className="container mx-auto px-4 text-center animate-on-scroll">
          <h2 className="font-heading text-3xl font-bold text-foreground mb-4">
            Neem gerust contact op
          </h2>
          <p className="text-muted-foreground text-lg mb-8 max-w-xl mx-auto">
            Voor meer informatie of een vrijblijvend kennismakingsgesprek.
          </p>
          <Link
            to="/contact"
            className="inline-flex items-center gap-2 bg-accent hover:bg-green-dark text-accent-foreground px-8 py-4 rounded-lg font-semibold transition-colors"
          >
            Contact opnemen <ArrowRight size={18} />
          </Link>
        </div>
      </section>
    </div>
  );
};

export default Diensten;
