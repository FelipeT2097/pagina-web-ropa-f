const ciudadesPorDepartamento = {
    'amazonas': ['Leticia', 'Puerto Nariño'],
    'antioquia': ['Medellín', 'Bello', 'Itagüí', 'Envigado', 'Apartadó'],
    'arauca': ['Arauca', 'Tame', 'Saravena'],
    'atlantico': ['Barranquilla', 'Soledad', 'Malambo'],
    'bolivar': ['Cartagena', 'Magangué', 'Turbaco'],
    'boyaca': ['Tunja', 'Sogamoso', 'Duitama'],
    'caldas': ['Manizales', 'Villamaría', 'La Dorada'],
    'caqueta': ['Florencia', 'San Vicente del Caguán'],
    'casanare': ['Yopal', 'Aguazul'],
    'cauca': ['Popayán', 'Santander de Quilichao'],
    'cesar': ['Valledupar', 'Aguachica'],
    'choco': ['Quibdó', 'Istmina'],
    'cordoba': ['Montería', 'Lorica'],
    'cundinamarca': ['Bogotá', 'Soacha', 'Chía'],
    'guainia': ['Inírida'],
    'guaviare': ['San José del Guaviare'],
    'huila': ['Neiva', 'Pitalito'],
    'la_guajira': ['Riohacha', 'Maicao'],
    'magdalena': ['Santa Marta', 'Ciénaga'],
    'meta': ['Villavicencio', 'Acacías'],
    'narino': ['Pasto', 'Tumaco'],
    'norte_santander': ['Cúcuta', 'Ocaña'],
    'putumayo': ['Mocoa', 'Puerto Asís'],
    'quindio': ['Armenia', 'Calarcá'],
    'risaralda': ['Pereira', 'Dosquebradas'],
    'san_andres': ['San Andrés'],
    'santander': ['Bucaramanga', 'Floridablanca', 'Girón'],
    'sucre': ['Sincelejo', 'Corozal'],
    'tolima': ['Ibagué', 'Espinal'],
    'valle': ['Cali', 'Palmira', 'Buenaventura'],
    'vaupes': ['Mitú'],
    'vichada': ['Puerto Carreño']
  };

  function updateCities() {
      const departamentoSelect = document.getElementById('departamento');
      const ciudadSelect = document.getElementById('ciudad');
      const selectedDepartamento = departamentoSelect.value;

      ciudadSelect.innerHTML = '<option value="">Seleccione...</option>'; // Limpiar las ciudades anteriores

      if (selectedDepartamento) {
        const ciudades = ciudadesPorDepartamento[selectedDepartamento];
        ciudades.forEach(ciudad => {
          const option = document.createElement('option');
          option.value = ciudad.toLowerCase().replace(/\s+/g, '_');
          option.textContent = ciudad;
          ciudadSelect.appendChild(option);
        });
      }
  }