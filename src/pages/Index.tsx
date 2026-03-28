import { Link } from "react-router-dom";
import { Monitor, Briefcase, Newspaper, Mail, Phone, MapPin, ArrowRight } from "lucide-react";
import { useScrollAnimation } from "@/hooks/use-scroll-animation";
import heroImage from "@/assets/hero-waste.jpg";

const features = [
  {
    icon: Monitor,
    title: "B-Organized",
    description: "Overzichtelijk platform om uw inzamelmiddelen te beheren. Real-time inzicht in uw containerpark.",
    link: "/b-organized",
  },
  {
    icon: Briefcase,
    title: "Diensten",
    description: "Thuis in de markt en van alle markten thuis. Van projectmanagement tot aanbestedingen.",
    link: "/diensten",
  },
  {
    icon: Newspaper,
    title: "Nieuws",
    description: "Altijd up to date met nieuws en innovaties uit de branche.",
    link: "/nieuws",
  },
];

const Index = () => {
  const scrollRef = useScrollAnimation();

  return (
    <div ref={scrollRef}>
      {/* Hero */}
      <section className="relative min-h-[85vh] flex items-center overflow-hidden">
        <div className="absolute inset-0">
          <img
            src={heroImage}
            alt="Ondergrondse container installatie in Nederlandse stad"
            className="w-full h-full object-cover"
            width={1920}
            height={1080}
          />
          <div className="absolute inset-0 bg-navy/80" />
        </div>
        <div className="container mx-auto px-4 relative z-10">
          <div className="max-w-3xl">
            <h1 className="font-heading text-4xl md:text-5xl lg:text-6xl font-bold text-primary-foreground leading-tight mb-6">
              Uw afval en container specialist
            </h1>
            <p className="text-lg md:text-xl text-primary-foreground/80 mb-10 max-w-2xl leading-relaxed">
              SMART afvalbeheer, projectmanagement en containerregistratie voor gemeenten en organisaties in Nederland. Al meer dan 20 jaar ervaring.
            </p>
            <div className="flex flex-col sm:flex-row gap-4">
              <Link
                to="/diensten"
                className="inline-flex items-center justify-center gap-2 bg-primary-foreground text-primary px-8 py-4 rounded-lg font-semibold transition-all hover:bg-primary-foreground/90"
              >
                Onze Diensten
                <ArrowRight size={18} />
              </Link>
              <a
                href="https://b-organized.info/login"
                target="_blank"
                rel="noopener noreferrer"
                className="inline-flex items-center justify-center gap-2 bg-green hover:bg-green-dark text-accent-foreground px-8 py-4 rounded-lg font-semibold transition-colors"
              >
                Login B-Organized
                <ArrowRight size={18} />
              </a>
            </div>
          </div>
        </div>
      </section>

      {/* Feature Cards */}
      <section className="py-20 bg-secondary">
        <div className="container mx-auto px-4">
          <div className="grid grid-cols-1 md:grid-cols-3 gap-8 stagger-children">
            {features.map((feature) => (
              <Link
                key={feature.title}
                to={feature.link}
                className="animate-on-scroll bg-card rounded-xl p-8 hover-lift border border-border group"
              >
                <div className="w-14 h-14 rounded-xl bg-accent/10 flex items-center justify-center mb-6 group-hover:bg-accent/20 transition-colors">
                  <feature.icon size={28} className="text-accent" />
                </div>
                <h3 className="font-heading text-xl font-bold text-foreground mb-3">
                  {feature.title}
                </h3>
                <p className="text-muted-foreground leading-relaxed mb-4">
                  {feature.description}
                </p>
                <span className="inline-flex items-center gap-1 text-accent font-semibold text-sm group-hover:gap-2 transition-all">
                  Meer informatie <ArrowRight size={14} />
                </span>
              </Link>
            ))}
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="py-20 bg-navy">
        <div className="container mx-auto px-4 text-center">
          <div className="animate-on-scroll max-w-2xl mx-auto">
            <h2 className="font-heading text-3xl md:text-4xl font-bold text-primary-foreground mb-6">
              Interesse gewekt?
            </h2>
            <p className="text-primary-foreground/70 text-lg mb-10">
              Neem gerust contact met ons op voor meer informatie of een vrijblijvend kennismakingsgesprek.
            </p>
            <div className="flex flex-col sm:flex-row items-center justify-center gap-6 text-primary-foreground/80">
              <a href="mailto:info@b-advice.info" className="flex items-center gap-2 hover:text-accent transition-colors">
                <Mail size={18} className="text-accent" /> info@b-advice.info
              </a>
              <a href="tel:+31643125245" className="flex items-center gap-2 hover:text-accent transition-colors">
                <Phone size={18} className="text-accent" /> +31 (6) 431 25 245
              </a>
              <span className="flex items-center gap-2">
                <MapPin size={18} className="text-accent" /> Achterdijk 26, Nieuwland
              </span>
            </div>
            <div className="mt-10">
              <Link
                to="/contact"
                className="inline-flex items-center gap-2 bg-green hover:bg-green-dark text-accent-foreground px-8 py-4 rounded-lg font-semibold transition-colors"
              >
                Neem contact op
                <ArrowRight size={18} />
              </Link>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
};

export default Index;
