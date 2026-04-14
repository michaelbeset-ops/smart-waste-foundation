import { useScrollAnimation } from "@/hooks/use-scroll-animation";

// ─── Placeholder products ────────────────────────────────────────────────────
// Each entry represents one product row.
// Replace title, description, and imageSrc with real content when ready.
const products = [
  {
    id: 1,
    title: "#1",
    description: "Productomschrijving hier invullen.",
    // imageSrc: "/images/product-1.jpg",
  },
  {
    id: 2,
    title: "#2",
    description: "Productomschrijving hier invullen.",
    // imageSrc: "/images/product-2.jpg",
  },
  {
    id: 3,
    title: "#3",
    description: "Productomschrijving hier invullen.",
    // imageSrc: "/images/product-3.jpg",
  },
  {
    id: 4,
    title: "#4",
    description: "Productomschrijving hier invullen.",
    // imageSrc: "/images/product-4.jpg",
  },
  {
    id: 5,
    title: "#5",
    description: "Productomschrijving hier invullen.",
    // imageSrc: "/images/product-5.jpg",
  },
];
// ─────────────────────────────────────────────────────────────────────────────

const Producten = () => {
  const scrollRef = useScrollAnimation();

  return (
    <div ref={scrollRef}>
      {/* Page header */}
      <section className="bg-navy py-24 lg:py-32">
        <div className="container mx-auto px-4">
          <div className="max-w-3xl">
            <h1 className="font-heading text-4xl md:text-5xl font-bold text-primary-foreground mb-6">
              Producten
            </h1>
            <p className="text-lg text-primary-foreground/70 leading-relaxed">
              Bekijk ons productassortiment. Neem contact op voor meer
              informatie of een vrijblijvende offerte op maat.
            </p>
          </div>
        </div>
      </section>

      {/* Product list */}
      <section className="py-20">
        <div className="container mx-auto px-4 max-w-3xl">
          <div className="flex flex-col gap-6 stagger-children">
            {products.map((product) => (
              <div
                key={product.id}
                className="animate-on-scroll flex flex-col sm:flex-row gap-6 p-6 rounded-xl border border-border bg-card hover-lift"
              >
                {/* ── Placeholder image block ─────────────────────────────
                    To swap in a real image, replace this <div> with:
                    <img src={product.imageSrc} alt={product.title}
                         className="w-full sm:w-44 h-36 object-cover rounded-lg shrink-0" />
                ────────────────────────────────────────────────────────── */}
                <div className="w-full sm:w-44 h-36 shrink-0 rounded-lg bg-muted flex items-center justify-center text-muted-foreground text-sm select-none">
                  Afbeelding
                </div>

                {/* Product info */}
                <div className="flex flex-col justify-center gap-2">
                  <h2 className="font-heading text-xl font-bold text-foreground">
                    Product {product.title}
                  </h2>
                  <p className="text-muted-foreground text-sm leading-relaxed">
                    {product.description}
                  </p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>
    </div>
  );
};

export default Producten;
