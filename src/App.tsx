import { QueryClient, QueryClientProvider } from "@tanstack/react-query";
import { HashRouter as BrowserRouter, Route, Routes } from "react-router-dom";
import { Toaster as Sonner } from "@/components/ui/sonner";
import { TooltipProvider } from "@/components/ui/tooltip";
import Layout from "@/components/Layout";
import Index from "./pages/Index";
import OverOns from "./pages/OverOns";
import Diensten from "./pages/Diensten";
import BOrganized from "./pages/BOrganized";
import Bestellingen from "./pages/Bestellingen";
import Nieuws from "./pages/Nieuws";
import Contact from "./pages/Contact";
import Producten from "./pages/Producten";
import NotFound from "./pages/NotFound";
import Privacybeleid from "./pages/Privacybeleid";
import Cookiebeleid from "./pages/Cookiebeleid";
import CookieConsent from "./components/CookieConsent";

const queryClient = new QueryClient();

const App = () => (
  <QueryClientProvider client={queryClient}>
    <TooltipProvider>
      <Sonner />
      <BrowserRouter>
        <Layout>
          <Routes>
            <Route path="/" element={<Index />} />
            <Route path="/over-ons" element={<OverOns />} />
            <Route path="/diensten" element={<Diensten />} />
            <Route path="/b-organized" element={<BOrganized />} />
            <Route path="/bestellingen" element={<Bestellingen />} />
            <Route path="/nieuws" element={<Nieuws />} />
            <Route path="/contact" element={<Contact />} />
            <Route path="/producten" element={<Producten />} />
            <Route path="/privacybeleid" element={<Privacybeleid />} />
            <Route path="/cookiebeleid" element={<Cookiebeleid />} />
            <Route path="*" element={<NotFound />} />
          </Routes>
        </Layout>
        <CookieConsent />
      </BrowserRouter>
    </TooltipProvider>
  </QueryClientProvider>
);

export default App;
