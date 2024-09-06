use Symfony\Component\Form\Extension\Core\Type\FileType;

$builder->add('photo', FileType::class, [
'label' => 'Upload Photo (required)',
'required' => true,
'mapped' => false,
]);
