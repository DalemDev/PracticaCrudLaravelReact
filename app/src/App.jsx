import { useEffect, useState } from "react";
import "./App.css";
import axios from "axios";

function App() {
  // especifico la url base a la que se realizara las peticiones
  const baseURL = "http://localhost:8000/api";

  // establezco un estado de clientes
  const [clientes, setClientes] = useState([]);

  // creo un metodo para obtener los clientes, aqui hago la peticion a la api
  const obtenerClientes = async () => {
    const { data } = await axios.get(`${baseURL}/clientes`);
    setClientes(data);
  };

  // creo un metodo que se va a ejecutar cuando se envie el formulario y hago una peticion post a la api enviandole la informacion para crear un cliente
  const handleSubmit = async (e) => {
    e.preventDefault();
    const [nombre, apellido, edad, sexo, imagen] = e.target;

    const { status } = await axios.post(`${baseURL}/clientes`, {
      nombre: nombre.value,
      apellido: apellido.value,
      edad: edad.value,
      sexo: sexo.value,
      imagen: imagen.value,
    });

    if (status == 201) {
      alert("Cliente creado exitosamente");
    }

    obtenerClientes();
  };

  // creo un efecto que se ejecutara una sola vez cada vez que se renderice el componente y lo que hace es obtener los clientes y asignarlos en el estado
  useEffect(() => {
    obtenerClientes();
  }, []);

  return (
    <div className="container">
      <div className="row my-4" style={{ width: "100%" }}>
        <div className="col-md-6" style={{ margin: "0 auto" }}>
          <form onSubmit={handleSubmit}>
            <div className="form-group my-3">
              <label htmlFor="nombre">Nombre:</label>
              <input
                type="text"
                className="form-control"
                id="nombre"
                name="nombre"
                required
              />
            </div>

            <div className="form-group my-3">
              <label htmlFor="apellido">Apellido:</label>
              <input
                type="text"
                className="form-control"
                id="apellido"
                name="apellido"
                required
              />
            </div>

            <div className="form-group my-3">
              <label htmlFor="edad">Edad:</label>
              <input
                type="number"
                className="form-control"
                id="edad"
                name="edad"
                required
              />
            </div>

            <div className="form-group my-3">
              <label htmlFor="sexo">Sexo:</label>
              <select className="form-control" id="sexo" name="sexo" required>
                <option value="">Seleccione</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
              </select>
            </div>

            <div className="form-group my-3">
              <label htmlFor="imagen">Imagen:</label>
              <input
                type="text"
                className="form-control"
                id="imagen"
                name="imagen"
                required
              />
            </div>

            <button type="submit" className="btn btn-primary my-3">
              Crear Cliente
            </button>
          </form>
        </div>
      </div>
      <div className="row">
        {/*renderizo el estado de clientes y creo una estructura html para mostrar la informacion que me trajo la api */}
        {clientes &&
          clientes.map((cliente) => (
            <div className="col-md-6" key={cliente.id}>
              <div className="card">
                <div className="card-header">
                  Cliente {cliente.nombre + " " + cliente.apellido}
                </div>
                <div className="card-body">
                  <p>Edad: {cliente.edad}</p>
                  <p>Sexo: {cliente.sexo}</p>
                  <img
                    style={{ width: "100%" }}
                    src={cliente.imagen}
                    alt="cliente"
                  />
                </div>
              </div>
            </div>
          ))}
      </div>
    </div>
  );
}

export default App;
