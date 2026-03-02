<!DOCTYPE html>
<html lang="fr">
@include('dash.siaka.head')
<body>
    <!-- Sidebar -->
    @include('dash.siaka.sidebar')

    <!-- Main Content -->
    <div id="content">
        <!-- Header -->


        <!-- Page Content -->
        <main class="container-fluid p-4" id="dashboard">
            <!-- Quick Stats -->
         @include('dash.siaka.gestion_employe')
            <!-- Main Dashboard -->

        </main>



    </div>
    </div>


    <!-- Add Employee Modal -->
   @include('dash.siaka.modal_ajouter_emp')
    @include('dash.siaka.script')

</body>
</html>
